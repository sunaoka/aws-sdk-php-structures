<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $parentId
 * @property string $pathPart
 * @property string $path
 * @property array<string, Method> $resourceMethods
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     parentId?: string,
     *     pathPart?: string,
     *     path?: string,
     *     resourceMethods?: array<string, Method>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
