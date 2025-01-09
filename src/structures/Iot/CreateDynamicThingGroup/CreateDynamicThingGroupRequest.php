<?php

namespace Sunaoka\Aws\Structures\Iot\CreateDynamicThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingGroupName
 * @property Shapes\ThingGroupProperties $thingGroupProperties
 * @property string $indexName
 * @property string $queryString
 * @property string $queryVersion
 * @property list<Shapes\Tag> $tags
 */
class CreateDynamicThingGroupRequest extends Request
{
    /**
     * @param array{
     *     thingGroupName: string,
     *     thingGroupProperties?: Shapes\ThingGroupProperties,
     *     indexName?: string,
     *     queryString: string,
     *     queryVersion?: string,
     *     tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
