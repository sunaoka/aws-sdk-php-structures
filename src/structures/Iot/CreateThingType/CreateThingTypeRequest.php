<?php

namespace Sunaoka\Aws\Structures\Iot\CreateThingType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingTypeName
 * @property Shapes\ThingTypeProperties|null $thingTypeProperties
 * @property list<Shapes\Tag>|null $tags
 */
class CreateThingTypeRequest extends Request
{
    /**
     * @param array{
     *     thingTypeName: string,
     *     thingTypeProperties?: Shapes\ThingTypeProperties|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
