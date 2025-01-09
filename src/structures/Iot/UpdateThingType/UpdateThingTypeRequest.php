<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateThingType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingTypeName
 * @property Shapes\ThingTypeProperties $thingTypeProperties
 */
class UpdateThingTypeRequest extends Request
{
    /**
     * @param array{
     *     thingTypeName: string,
     *     thingTypeProperties?: Shapes\ThingTypeProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
