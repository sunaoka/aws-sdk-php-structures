<?php

namespace Sunaoka\Aws\Structures\KendraRanking\DescribeRescoreExecutionPlan;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Id
 * @property string $Arn
 * @property string $Name
 * @property string $Description
 * @property Shapes\CapacityUnitsConfiguration $CapacityUnits
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property 'CREATING'|'UPDATING'|'ACTIVE'|'DELETING'|'FAILED' $Status
 * @property string $ErrorMessage
 */
class DescribeRescoreExecutionPlanResponse extends Response
{
}
