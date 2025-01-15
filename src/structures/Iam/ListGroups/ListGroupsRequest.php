<?php

namespace Sunaoka\Aws\Structures\Iam\ListGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $PathPrefix
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListGroupsRequest extends Request
{
    /**
     * @param array{
     *     PathPrefix?: string|null,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
