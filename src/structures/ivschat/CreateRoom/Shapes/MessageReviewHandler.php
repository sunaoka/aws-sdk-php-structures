<?php

namespace Sunaoka\Aws\Structures\ivschat\CreateRoom\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $uri
 * @property 'ALLOW'|'DENY' $fallbackResult
 */
class MessageReviewHandler extends Shape
{
    /**
     * @param array{
     *     uri?: string,
     *     fallbackResult?: 'ALLOW'|'DENY'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
