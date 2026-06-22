<?php

namespace Sunaoka\Aws\Structures\LambdaMicrovms\GetMicrovmImageBuild\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $memorySnapshotSizeInBytes
 * @property int|null $codeInstallSizeInBytes
 * @property int|null $diskSnapshotSizeInBytes
 */
class SnapshotBuild extends Shape
{
    /**
     * @param array{
     *     memorySnapshotSizeInBytes?: int|null,
     *     codeInstallSizeInBytes?: int|null,
     *     diskSnapshotSizeInBytes?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
