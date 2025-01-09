<?php

namespace Sunaoka\Aws\Structures\CostOptimizationHub\ListEnrollmentStatuses;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $includeOrganizationInfo
 * @property string $accountId
 * @property string $nextToken
 * @property int $maxResults
 */
class ListEnrollmentStatusesRequest extends Request
{
    /**
     * @param array{
     *     includeOrganizationInfo?: bool,
     *     accountId?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
