<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $url
 * @property string|null $domain
 */
class WebLocation extends Shape
{
    /**
     * @param array{
     *     url?: string|null,
     *     domain?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
