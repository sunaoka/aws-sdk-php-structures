<?php

namespace Sunaoka\Aws\Structures\GuardDuty\ListCoverage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property CoverageEksClusterDetails|null $EksClusterDetails
 * @property 'EKS'|null $ResourceType
 */
class CoverageResourceDetails extends Shape
{
    /**
     * @param array{
     *     EksClusterDetails?: CoverageEksClusterDetails|null,
     *     ResourceType?: 'EKS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
