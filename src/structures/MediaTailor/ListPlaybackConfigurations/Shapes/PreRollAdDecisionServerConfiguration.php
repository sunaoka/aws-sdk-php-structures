<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPlaybackConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PreRollVastResponse|null $VastResponse
 */
class PreRollAdDecisionServerConfiguration extends Shape
{
    /**
     * @param array{VastResponse?: PreRollVastResponse|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
