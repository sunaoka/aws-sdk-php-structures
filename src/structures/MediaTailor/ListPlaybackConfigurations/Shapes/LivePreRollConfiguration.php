<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPlaybackConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AdDecisionServerUrl
 * @property int|null $MaxDurationSeconds
 * @property PreRollAdDecisionServerConfiguration|null $AdDecisionServerConfiguration
 */
class LivePreRollConfiguration extends Shape
{
    /**
     * @param array{
     *     AdDecisionServerUrl?: string|null,
     *     MaxDurationSeconds?: int|null,
     *     AdDecisionServerConfiguration?: PreRollAdDecisionServerConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
