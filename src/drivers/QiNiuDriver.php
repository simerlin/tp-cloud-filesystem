<?php
namespace simerlin\filesystem\cloud\drivers;

use League\Flysystem\FilesystemAdapter;
use Overtrue\Flysystem\Qiniu\QiniuAdapter;
use think\filesystem\Driver;

class QiNiuDriver extends Driver
{

    protected function createAdapter(): FilesystemAdapter
    {
        // TODO: Implement createAdapter() method.
        $qnConfig = \config('filesystem.disks.qiNiu');
        return new QiniuAdapter($qnConfig['access_key'], $qnConfig['secret_key'], $qnConfig['bucket'], $qnConfig['domain']);
    }
}