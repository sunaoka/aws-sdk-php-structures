<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AudioSilenceFailoverSettings|null $AudioSilenceSettings
 * @property InputLossFailoverSettings|null $InputLossSettings
 * @property VideoBlackFailoverSettings|null $VideoBlackSettings
 */
class FailoverConditionSettings extends Shape
{
    /**
     * @param array{
     *     AudioSilenceSettings?: AudioSilenceFailoverSettings|null,
     *     InputLossSettings?: InputLossFailoverSettings|null,
     *     VideoBlackSettings?: VideoBlackFailoverSettings|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
