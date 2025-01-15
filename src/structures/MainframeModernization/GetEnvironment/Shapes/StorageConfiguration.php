<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EfsStorageConfiguration|null $efs
 * @property FsxStorageConfiguration|null $fsx
 */
class StorageConfiguration extends Shape
{
    /**
     * @param array{
     *     efs?: EfsStorageConfiguration|null,
     *     fsx?: FsxStorageConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
