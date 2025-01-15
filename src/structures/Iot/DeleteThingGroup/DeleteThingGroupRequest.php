<?php

namespace Sunaoka\Aws\Structures\Iot\DeleteThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingGroupName
 * @property int|null $expectedVersion
 */
class DeleteThingGroupRequest extends Request
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
