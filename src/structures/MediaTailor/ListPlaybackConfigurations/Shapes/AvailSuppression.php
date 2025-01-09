<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPlaybackConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FULL_AVAIL_ONLY'|'PARTIAL_AVAIL' $FillPolicy
 * @property 'OFF'|'BEHIND_LIVE_EDGE'|'AFTER_LIVE_EDGE' $Mode
 * @property string $Value
 */
class AvailSuppression extends Shape
{
    /**
     * @param array{
     *     FillPolicy?: 'FULL_AVAIL_ONLY'|'PARTIAL_AVAIL',
     *     Mode?: 'OFF'|'BEHIND_LIVE_EDGE'|'AFTER_LIVE_EDGE',
     *     Value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
