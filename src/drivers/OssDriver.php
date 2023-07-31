<?php
namespace simerlin\filesystem\cloud\drivers;

use Iidestiny\Flysystem\Oss\OssAdapter;
use League\Flysystem\FilesystemAdapter;
use OSS\Core\OssException;
use think\filesystem\Driver;

class OssDriver extends Driver
{
    /**
     * @return FilesystemAdapter
     * @throws OssException
     */
    protected function createAdapter(): FilesystemAdapter
    {
        // TODO: Implement createAdapter() method.
        $ossConfig = \config('filesystem.disks.oss');
        return new OssAdapter(
            $ossConfig['access_key'],
            $ossConfig['secret_key'],
            $ossConfig['end_point'],
            $ossConfig['bucket'],
            $ossConfig['is_cname'],
            $ossConfig['prefix']
        );
    }

}