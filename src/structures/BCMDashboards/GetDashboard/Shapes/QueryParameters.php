<?php

namespace Sunaoka\Aws\Structures\BCMDashboards\GetDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CostAndUsageQuery|null $costAndUsage
 * @property SavingsPlansCoverageQuery|null $savingsPlansCoverage
 * @property SavingsPlansUtilizationQuery|null $savingsPlansUtilization
 * @property ReservationCoverageQuery|null $reservationCoverage
 * @property ReservationUtilizationQuery|null $reservationUtilization
 */
class QueryParameters extends Shape
{
    /**
     * @param array{
     *     costAndUsage?: CostAndUsageQuery|null,
     *     savingsPlansCoverage?: SavingsPlansCoverageQuery|null,
     *     savingsPlansUtilization?: SavingsPlansUtilizationQuery|null,
     *     reservationCoverage?: ReservationCoverageQuery|null,
     *     reservationUtilization?: ReservationUtilizationQuery|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
