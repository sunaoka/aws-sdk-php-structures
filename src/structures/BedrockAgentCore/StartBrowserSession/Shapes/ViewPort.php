<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\StartBrowserSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<320, 3840> $width
 * @property int<240, 2160> $height
 */
class ViewPort extends Shape
{
    /**
     * @param array{
     *     width: int<320, 3840>,
     *     height: int<240, 2160>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
