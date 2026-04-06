<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SynchronizeGatewayTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string|null $description
 * @property string $path
 * @property 'GET'|'DELETE'|'HEAD'|'OPTIONS'|'PATCH'|'PUT'|'POST' $method
 */
class ApiGatewayToolOverride extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     description?: string|null,
     *     path: string,
     *     method: 'GET'|'DELETE'|'HEAD'|'OPTIONS'|'PATCH'|'PUT'|'POST'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
