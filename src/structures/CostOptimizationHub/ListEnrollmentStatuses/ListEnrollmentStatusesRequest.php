<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListEnrollmentStatuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $includeOrganizationInfo
 * @property string|null $accountId
 * @property string|null $nextToken
 * @property int<0, 100>|null $maxResults
 */
class ListEnrollmentStatusesRequest extends Request
{
    /**
     * @param array{
     *     includeOrganizationInfo?: bool|null,
     *     accountId?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<0, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
