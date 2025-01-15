<?php

namespace Sunaoka\Aws\Structures\Iot\ListAuthorizers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $authorizerName
 * @property string|null $authorizerArn
 */
class AuthorizerSummary extends Shape
{
    /**
     * @param array{
     *     authorizerName?: string|null,
     *     authorizerArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
