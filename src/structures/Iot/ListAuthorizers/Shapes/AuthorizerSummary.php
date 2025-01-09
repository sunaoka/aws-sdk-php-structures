<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuthorizers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $authorizerName
 * @property string $authorizerArn
 */
class AuthorizerSummary extends Shape
{
    /**
     * @param array{
     *     authorizerName?: string,
     *     authorizerArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
