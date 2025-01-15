<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\SearchEntities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NAME'|'NAMESPACE'|'SEMANTIC_TYPE_PATH'|'REFERENCED_ENTITY_ID'|null $name
 * @property list<string>|null $value
 */
class EntityFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'NAME'|'NAMESPACE'|'SEMANTIC_TYPE_PATH'|'REFERENCED_ENTITY_ID'|null,
     *     value?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
