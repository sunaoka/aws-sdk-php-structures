<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EpochLockingSettings $EpochLockingSettings
 * @property PipelineLockingSettings $PipelineLockingSettings
 */
class OutputLockingSettings extends Shape
{
    /**
     * @param array{
     *     EpochLockingSettings?: EpochLockingSettings,
     *     PipelineLockingSettings?: PipelineLockingSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
