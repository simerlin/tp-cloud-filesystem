<?php
namespace simerlin\filesystem\cloud\drivers;

use League\Flysystem\FilesystemAdapter;
use Overtrue\Flysystem\Cos\CosAdapter;
use think\filesystem\Driver;

class QCloudDriver extends Driver
{
    protected function createAdapter(): FilesystemAdapter
    {
        // TODO: Implement createAdapter() method.
        return new CosAdapter(\config('filesystem.disks.qCloud'));
    }
}