<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\GetCostEstimation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\CostEstimationResourceCollectionFilter|null $ResourceCollection
 * @property 'ONGOING'|'COMPLETED'|null $Status
 * @property list<Shapes\ServiceResourceCost>|null $Costs
 * @property Shapes\CostEstimationTimeRange|null $TimeRange
 * @property double|null $TotalCost
 * @property string|null $NextToken
 */
class GetCostEstimationResponse extends Response
{
}
