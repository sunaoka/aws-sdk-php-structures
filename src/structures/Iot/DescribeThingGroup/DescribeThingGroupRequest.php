<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeThingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingGroupName
 */
class DescribeThingGroupRequest extends Request
{
    /**
     * @param array{thingGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
