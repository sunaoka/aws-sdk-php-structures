<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-60, 60>|null $InitialAudioGain
 * @property 'NONE'|'SWITCH_AND_LOOP_INPUTS'|null $InputEndAction
 * @property InputLossBehavior|null $InputLossBehavior
 * @property 'EPOCH_LOCKING'|'PIPELINE_LOCKING'|null $OutputLockingMode
 * @property 'INPUT_CLOCK'|'SYSTEM_CLOCK'|null $OutputTimingSource
 * @property 'DISABLED'|'ENABLED'|null $SupportLowFramerateInputs
 * @property OutputLockingSettings|null $OutputLockingSettings
 */
class GlobalConfiguration extends Shape
{
    /**
     * @param array{
     *     InitialAudioGain?: int<-60, 60>|null,
     *     InputEndAction?: 'NONE'|'SWITCH_AND_LOOP_INPUTS'|null,
     *     InputLossBehavior?: InputLossBehavior|null,
     *     OutputLockingMode?: 'EPOCH_LOCKING'|'PIPELINE_LOCKING'|null,
     *     OutputTimingSource?: 'INPUT_CLOCK'|'SYSTEM_CLOCK'|null,
     *     SupportLowFramerateInputs?: 'DISABLED'|'ENABLED'|null,
     *     OutputLockingSettings?: OutputLockingSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
