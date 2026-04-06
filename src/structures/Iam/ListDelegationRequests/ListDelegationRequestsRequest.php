<?php

namespace Sunaoka\Aws\Structures\Iam\ListDelegationRequests;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $OwnerId
 * @property string|null $Marker
 * @property int<1, 1000>|null $MaxItems
 */
class ListDelegationRequestsRequest extends Request
{
    /**
     * @param array{
     *     OwnerId?: string|null,
     *     Marker?: string|null,
     *     MaxItems?: int<1, 1000>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
