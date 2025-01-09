<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\DissociateEntityFromThing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property 'DEVICE'|'SERVICE'|'DEVICE_MODEL'|'CAPABILITY'|'STATE'|'ACTION'|'EVENT'|'PROPERTY'|'MAPPING'|'ENUM' $entityType
 */
class DissociateEntityFromThingRequest extends Request
{
    /**
     * @param array{
     *     thingName: string,
     *     entityType: 'DEVICE'|'SERVICE'|'DEVICE_MODEL'|'CAPABILITY'|'STATE'|'ACTION'|'EVENT'|'PROPERTY'|'MAPPING'|'ENUM'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
