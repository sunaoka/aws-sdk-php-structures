<?php

namespace Sunaoka\Aws\Structures\Iot\CreateThingType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingTypeName
 * @property Shapes\ThingTypeProperties $thingTypeProperties
 * @property list<Shapes\Tag> $tags
 */
class CreateThingTypeRequest extends Request
{
    /**
     * @param array{
     *     thingTypeName: string,
     *     thingTypeProperties?: Shapes\ThingTypeProperties,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
