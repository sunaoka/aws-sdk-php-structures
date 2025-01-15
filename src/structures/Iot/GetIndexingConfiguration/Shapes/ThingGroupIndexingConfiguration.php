<?php

namespace Sunaoka\Aws\Structures\Iot\GetIndexingConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'OFF'|'ON' $thingGroupIndexingMode
 * @property list<Field>|null $managedFields
 * @property list<Field>|null $customFields
 */
class ThingGroupIndexingConfiguration extends Shape
{
    /**
     * @param array{
     *     thingGroupIndexingMode: 'OFF'|'ON',
     *     managedFields?: list<Field>|null,
     *     customFields?: list<Field>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
