<?php

namespace Sunaoka\Aws\Structures\ivschat\GetRoom\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW'|'DENY'|null $fallbackResult
 * @property string|null $uri
 */
class MessageReviewHandler extends Shape
{
    /**
     * @param array{
     *     fallbackResult?: 'ALLOW'|'DENY'|null,
     *     uri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
