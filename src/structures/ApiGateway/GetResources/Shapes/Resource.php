<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $parentId
 * @property string|null $pathPart
 * @property string|null $path
 * @property array<string, Method>|null $resourceMethods
 */
class Resource extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     parentId?: string|null,
     *     pathPart?: string|null,
     *     path?: string|null,
     *     resourceMethods?: array<string, Method>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
