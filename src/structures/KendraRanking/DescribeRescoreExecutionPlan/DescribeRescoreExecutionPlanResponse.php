<?php

namespace Sunaoka\Aws\Structures\KendraRanking\DescribeRescoreExecutionPlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Id
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\CapacityUnitsConfiguration|null $CapacityUnits
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED'|null $Status
 * @property string|null $ErrorMessage
 */
class DescribeRescoreExecutionPlanResponse extends Response
{
}
