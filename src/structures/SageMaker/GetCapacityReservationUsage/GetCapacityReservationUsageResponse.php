<?php

namespace Sunaoka\Aws\Structures\SageMaker\GetCapacityReservationUsage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $SMCapacityReservationId
 * @property int<0, max> $TotalInstanceCount
 * @property int<0, max> $AvailableInstanceCount
 * @property \Aws\Api\DateTimeResult $LastRefreshTime
 * @property list<Shapes\CapacityReservationInstanceUsage> $InstanceUsageSet
 * @property string|null $NextToken
 */
class GetCapacityReservationUsageResponse extends Response
{
}
