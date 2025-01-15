<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListDashboardVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $DashboardId
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListDashboardVersionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     DashboardId: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
