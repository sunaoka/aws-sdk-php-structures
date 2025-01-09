<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioSilenceFailoverSettings $AudioSilenceSettings
 * @property InputLossFailoverSettings $InputLossSettings
 * @property VideoBlackFailoverSettings $VideoBlackSettings
 */
class FailoverConditionSettings extends Shape
{
    /**
     * @param array{
     *     AudioSilenceSettings?: AudioSilenceFailoverSettings,
     *     InputLossSettings?: InputLossFailoverSettings,
     *     VideoBlackSettings?: VideoBlackFailoverSettings
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
