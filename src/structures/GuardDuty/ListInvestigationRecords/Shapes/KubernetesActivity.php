<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KubernetesApiCall|null $ApiCall
 * @property KubernetesAnomaly|null $Anomaly
 * @property InvestigationKubernetesWorkload|null $Workload
 * @property Enrichment|null $Enrichment
 */
class KubernetesActivity extends Shape
{
    /**
     * @param array{
     *     ApiCall?: KubernetesApiCall|null,
     *     Anomaly?: KubernetesAnomaly|null,
     *     Workload?: InvestigationKubernetesWorkload|null,
     *     Enrichment?: Enrichment|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
