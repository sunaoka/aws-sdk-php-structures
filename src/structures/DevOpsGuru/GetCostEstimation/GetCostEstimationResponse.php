<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\GetCostEstimation;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\CostEstimationResourceCollectionFilter $ResourceCollection
 * @property 'ONGOING'|'COMPLETED' $Status
 * @property list<Shapes\ServiceResourceCost> $Costs
 * @property Shapes\CostEstimationTimeRange $TimeRange
 * @property double $TotalCost
 * @property string $NextToken
 */
class GetCostEstimationResponse extends Response
{
}
