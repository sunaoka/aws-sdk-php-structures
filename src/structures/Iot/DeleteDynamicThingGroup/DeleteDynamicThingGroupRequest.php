<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteDynamicThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingGroupName
 * @property int|null $expectedVersion
 */
class DeleteDynamicThingGroupRequest extends Request
{
    /**
     * @param array{
     *     thingGroupName: string,
     *     expectedVersion?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
