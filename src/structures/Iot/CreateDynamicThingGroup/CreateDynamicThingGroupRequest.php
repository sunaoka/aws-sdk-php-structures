<?php

namespace Sunaoka\Aws\Structures\Iot\CreateDynamicThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingGroupName
 * @property Shapes\ThingGroupProperties|null $thingGroupProperties
 * @property string|null $indexName
 * @property string $queryString
 * @property string|null $queryVersion
 * @property list<Shapes\Tag>|null $tags
 */
class CreateDynamicThingGroupRequest extends Request
{
    /**
     * @param array{
     *     thingGroupName: string,
     *     thingGroupProperties?: Shapes\ThingGroupProperties|null,
     *     indexName?: string|null,
     *     queryString: string,
     *     queryVersion?: string|null,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
