<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListSearches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $searchId
 * @property string $workspaceName
 * @property 'QUEUED'|'RUNNING'|'SUCCEEDED'|'FAILED' $status
 * @property string $queryStatement
 * @property 'DEEP'|'QUICK' $searchType
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property string|null $groupId
 */
class SearchSummary extends Shape
{
    /**
     * @param array{
     *     searchId: string,
     *     workspaceName: string,
     *     status: 'QUEUED'|'RUNNING'|'SUCCEEDED'|'FAILED',
     *     queryStatement: string,
     *     searchType: 'DEEP'|'QUICK',
     *     statusReason?: string|null,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     groupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
