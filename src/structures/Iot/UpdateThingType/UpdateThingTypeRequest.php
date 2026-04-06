<?php

namespace Sunaoka\Aws\Structures\Iot\UpdateThingType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingTypeName
 * @property Shapes\ThingTypeProperties|null $thingTypeProperties
 */
class UpdateThingTypeRequest extends Request
{
    /**
     * @param array{
     *     thingTypeName: string,
     *     thingTypeProperties?: Shapes\ThingTypeProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
