<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FULL_AVAIL_ONLY'|'PARTIAL_AVAIL'|null $FillPolicy
 * @property 'OFF'|'BEHIND_LIVE_EDGE'|'AFTER_LIVE_EDGE'|null $Mode
 * @property string|null $Value
 */
class AvailSuppression extends Shape
{
    /**
     * @param array{
     *     FillPolicy?: 'FULL_AVAIL_ONLY'|'PARTIAL_AVAIL'|null,
     *     Mode?: 'OFF'|'BEHIND_LIVE_EDGE'|'AFTER_LIVE_EDGE'|null,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
