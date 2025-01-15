<?php

namespace Sunaoka\Aws\Structures\ivschat\UpdateRoom\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $uri
 * @property 'ALLOW'|'DENY'|null $fallbackResult
 */
class MessageReviewHandler extends Shape
{
    /**
     * @param array{
     *     uri?: string|null,
     *     fallbackResult?: 'ALLOW'|'DENY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
