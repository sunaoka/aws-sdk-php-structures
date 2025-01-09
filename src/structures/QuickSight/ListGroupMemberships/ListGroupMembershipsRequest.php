<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListGroupMemberships;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GroupName
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 * @property string $AwsAccountId
 * @property string $Namespace
 */
class ListGroupMembershipsRequest extends Request
{
    /**
     * @param array{
     *     GroupName: string,
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>,
     *     AwsAccountId: string,
     *     Namespace: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
