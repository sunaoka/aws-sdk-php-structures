<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\GetEnvironment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $fileSystemId
 * @property string $mountPoint
 */
class FsxStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     fileSystemId: string,
     *     mountPoint: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
