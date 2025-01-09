<?php

namespace Sunaoka\Aws\Structures\Iam\ListUsers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PathPrefix
 * @property string $Marker
 * @property int<1, 1000> $MaxItems
 */
class ListUsersRequest extends Request
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
