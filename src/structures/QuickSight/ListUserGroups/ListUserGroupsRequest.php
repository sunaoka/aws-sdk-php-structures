<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListUserGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserName
 * @property string $AwsAccountId
 * @property string $Namespace
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListUserGroupsRequest extends Request
{
    /**
     * @param array{
     *     UserName: string,
     *     AwsAccountId: string,
     *     Namespace: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
