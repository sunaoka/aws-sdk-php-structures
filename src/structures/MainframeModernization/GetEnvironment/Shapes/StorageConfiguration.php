<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EfsStorageConfiguration $efs
 * @property FsxStorageConfiguration $fsx
 */
class StorageConfiguration extends Shape
{
    /**
     * @param array{
     *     efs?: EfsStorageConfiguration,
     *     fsx?: FsxStorageConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
