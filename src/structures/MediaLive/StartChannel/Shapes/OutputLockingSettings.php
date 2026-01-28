<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EpochLockingSettings|null $EpochLockingSettings
 * @property PipelineLockingSettings|null $PipelineLockingSettings
 * @property DisabledLockingSettings|null $DisabledLockingSettings
 */
class OutputLockingSettings extends Shape
{
    /**
     * @param array{
     *     EpochLockingSettings?: EpochLockingSettings|null,
     *     PipelineLockingSettings?: PipelineLockingSettings|null,
     *     DisabledLockingSettings?: DisabledLockingSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
