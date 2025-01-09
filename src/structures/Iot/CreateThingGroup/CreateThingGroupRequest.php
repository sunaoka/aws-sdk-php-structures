<?php

namespace Sunaoka\Aws\Structures\Iot\CreateThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingGroupName
 * @property string $parentGroupName
 * @property Shapes\ThingGroupProperties $thingGroupProperties
 * @property list<Shapes\Tag> $tags
 */
class CreateThingGroupRequest extends Request
{
    /**
     * @param array{
     *     thingGroupName: string,
     *     parentGroupName?: string,
     *     thingGroupProperties?: Shapes\ThingGroupProperties,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
