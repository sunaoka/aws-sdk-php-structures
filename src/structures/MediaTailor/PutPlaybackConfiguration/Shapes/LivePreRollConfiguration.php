<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AdDecisionServerUrl
 * @property int|null $MaxDurationSeconds
 */
class LivePreRollConfiguration extends Shape
{
    /**
     * @param array{
     *     AdDecisionServerUrl?: string|null,
     *     MaxDurationSeconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
