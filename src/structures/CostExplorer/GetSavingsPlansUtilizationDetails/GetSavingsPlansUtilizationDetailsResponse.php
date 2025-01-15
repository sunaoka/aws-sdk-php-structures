<?php

namespace Sunaoka\Aws\Structures\CostExplorer\GetSavingsPlansUtilizationDetails;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\SavingsPlansUtilizationDetail> $SavingsPlansUtilizationDetails
 * @property Shapes\SavingsPlansUtilizationAggregates|null $Total
 * @property Shapes\DateInterval $TimePeriod
 * @property string|null $NextToken
 */
class GetSavingsPlansUtilizationDetailsResponse extends Response
{
}
