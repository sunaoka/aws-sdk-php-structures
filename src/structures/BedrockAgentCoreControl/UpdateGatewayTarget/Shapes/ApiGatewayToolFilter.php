<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayTarget\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filterPath
 * @property list<'GET'|'DELETE'|'HEAD'|'OPTIONS'|'PATCH'|'PUT'|'POST'> $methods
 */
class ApiGatewayToolFilter extends Shape
{
    /**
     * @param array{
     *     filterPath: string,
     *     methods: list<'GET'|'DELETE'|'HEAD'|'OPTIONS'|'PATCH'|'PUT'|'POST'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
