<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListGroupMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 * @property string $AwsAccountId
 * @property string $Namespace
 */
class ListGroupMembershipsRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     AwsAccountId: string,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
