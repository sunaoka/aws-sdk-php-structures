<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListPlaybackConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HttpRequest|null $HttpRequest
 */
class AdDecisionServerConfiguration extends Shape
{
    /**
     * @param array{HttpRequest?: HttpRequest|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
