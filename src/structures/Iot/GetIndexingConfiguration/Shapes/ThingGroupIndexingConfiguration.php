<?php

namespace Sunaoka\Aws\Structures\Iot\GetIndexingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'ON' $thingGroupIndexingMode
 * @property list<Field> $managedFields
 * @property list<Field> $customFields
 */
class ThingGroupIndexingConfiguration extends Shape
{
    /**
     * @param array{
     *     thingGroupIndexingMode: 'OFF'|'ON',
     *     managedFields?: list<Field>,
     *     customFields?: list<Field>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
