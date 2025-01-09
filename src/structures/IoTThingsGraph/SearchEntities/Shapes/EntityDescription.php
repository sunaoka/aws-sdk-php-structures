<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $arn
 * @property 'DEVICE'|'SERVICE'|'DEVICE_MODEL'|'CAPABILITY'|'STATE'|'ACTION'|'EVENT'|'PROPERTY'|'MAPPING'|'ENUM' $type
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property DefinitionDocument $definition
 */
class EntityDescription extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     arn?: string,
     *     type?: 'DEVICE'|'SERVICE'|'DEVICE_MODEL'|'CAPABILITY'|'STATE'|'ACTION'|'EVENT'|'PROPERTY'|'MAPPING'|'ENUM',
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     definition?: DefinitionDocument
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
