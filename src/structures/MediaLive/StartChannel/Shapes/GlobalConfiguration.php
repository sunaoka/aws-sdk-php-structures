<?php

namespace Sunaoka\Aws\Structures\MediaLive\StartChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $InitialAudioGain
 * @property 'NONE'|'SWITCH_AND_LOOP_INPUTS' $InputEndAction
 * @property InputLossBehavior $InputLossBehavior
 * @property 'EPOCH_LOCKING'|'PIPELINE_LOCKING' $OutputLockingMode
 * @property 'INPUT_CLOCK'|'SYSTEM_CLOCK' $OutputTimingSource
 * @property 'DISABLED'|'ENABLED' $SupportLowFramerateInputs
 * @property OutputLockingSettings $OutputLockingSettings
 */
class GlobalConfiguration extends Shape
{
    /**
     * @param array{
     *     InitialAudioGain?: int,
     *     InputEndAction?: 'NONE'|'SWITCH_AND_LOOP_INPUTS',
     *     InputLossBehavior?: InputLossBehavior,
     *     OutputLockingMode?: 'EPOCH_LOCKING'|'PIPELINE_LOCKING',
     *     OutputTimingSource?: 'INPUT_CLOCK'|'SYSTEM_CLOCK',
     *     SupportLowFramerateInputs?: 'DISABLED'|'ENABLED',
     *     OutputLockingSettings?: OutputLockingSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
