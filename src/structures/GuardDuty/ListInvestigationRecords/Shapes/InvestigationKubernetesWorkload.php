<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListInvestigationRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WorkloadType
 * @property string|null $WorkloadName
 * @property string|null $Containers
 * @property string|null $Volumes
 * @property string|null $SecurityContext
 */
class InvestigationKubernetesWorkload extends Shape
{
    /**
     * @param array{
     *     WorkloadType?: string|null,
     *     WorkloadName?: string|null,
     *     Containers?: string|null,
     *     Volumes?: string|null,
     *     SecurityContext?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
