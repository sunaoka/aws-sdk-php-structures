<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListDeployments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $applicationName
 * @property string|null $deploymentGroupName
 * @property string|null $externalId
 * @property list<'Created'|'Queued'|'InProgress'|'Baking'|'Succeeded'|'Failed'|'Stopped'|'Ready'>|null $includeOnlyStatuses
 * @property Shapes\TimeRange|null $createTimeRange
 * @property string|null $nextToken
 */
class ListDeploymentsRequest extends Request
{
    /**
     * @param array{
     *     applicationName?: string|null,
     *     deploymentGroupName?: string|null,
     *     externalId?: string|null,
     *     includeOnlyStatuses?: list<'Created'|'Queued'|'InProgress'|'Baking'|'Succeeded'|'Failed'|'Stopped'|'Ready'>|null,
     *     createTimeRange?: Shapes\TimeRange|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
