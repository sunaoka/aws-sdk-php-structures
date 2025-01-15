<?php

namespace Sunaoka\Aws\Structures\Iot\CreateThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingGroupName
 * @property string|null $parentGroupName
 * @property Shapes\ThingGroupProperties|null $thingGroupProperties
 * @property list<Shapes\Tag>|null $tags
 */
class CreateThingGroupRequest extends Request
{
    /**
     * @param array{
     *     thingGroupName: string,
     *     parentGroupName?: string|null,
     *     thingGroupProperties?: Shapes\ThingGroupProperties|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
