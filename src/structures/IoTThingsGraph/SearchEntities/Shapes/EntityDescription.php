<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $arn
 * @property 'DEVICE'|'SERVICE'|'DEVICE_MODEL'|'CAPABILITY'|'STATE'|'ACTION'|'EVENT'|'PROPERTY'|'MAPPING'|'ENUM'|null $type
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property DefinitionDocument|null $definition
 */
class EntityDescription extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     arn?: string|null,
     *     type?: 'DEVICE'|'SERVICE'|'DEVICE_MODEL'|'CAPABILITY'|'STATE'|'ACTION'|'EVENT'|'PROPERTY'|'MAPPING'|'ENUM'|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     definition?: DefinitionDocument|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
