<?php

namespace Sunaoka\Aws\Structures\Emr\ListInstanceGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $Marker
 */
class ListInstanceGroupsRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
