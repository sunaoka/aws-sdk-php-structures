<?php

namespace Sunaoka\Aws\Structures\Iam\ListGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PathPrefix
 * @property string $Marker
 * @property int<1, 1000> $MaxItems
 */
class ListGroupsRequest extends Request
{
    /**
     * @param array{
     *     PathPrefix?: string,
     *     Marker?: string,
     *     MaxItems?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
