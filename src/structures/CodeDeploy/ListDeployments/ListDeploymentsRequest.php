<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationName
 * @property string $deploymentGroupName
 * @property string $externalId
 * @property list<'Created'|'Queued'|'InProgress'|'Baking'|'Succeeded'|'Failed'|'Stopped'|'Ready'> $includeOnlyStatuses
 * @property Shapes\TimeRange $createTimeRange
 * @property string $nextToken
 */
class ListDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     applicationName?: string,
     *     deploymentGroupName?: string,
     *     externalId?: string,
     *     includeOnlyStatuses?: list<'Created'|'Queued'|'InProgress'|'Baking'|'Succeeded'|'Failed'|'Stopped'|'Ready'>,
     *     createTimeRange?: Shapes\TimeRange,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
