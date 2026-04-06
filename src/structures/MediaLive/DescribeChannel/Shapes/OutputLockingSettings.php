<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EpochLockingSettings|null $EpochLockingSettings
 * @property PipelineLockingSettings|null $PipelineLockingSettings
 */
class OutputLockingSettings extends Shape
{
    /**
     * @param array{
     *     EpochLockingSettings?: EpochLockingSettings|null,
     *     PipelineLockingSettings?: PipelineLockingSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
