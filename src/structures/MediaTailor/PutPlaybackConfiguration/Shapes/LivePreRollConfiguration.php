<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AdDecisionServerUrl
 * @property int $MaxDurationSeconds
 */
class LivePreRollConfiguration extends Shape
{
    /**
     * @param array{
     *     AdDecisionServerUrl?: string,
     *     MaxDurationSeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
