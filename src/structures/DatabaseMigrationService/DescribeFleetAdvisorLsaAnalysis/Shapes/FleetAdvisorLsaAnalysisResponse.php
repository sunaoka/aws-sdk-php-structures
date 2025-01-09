<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorLsaAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LsaAnalysisId
 * @property string $Status
 */
class FleetAdvisorLsaAnalysisResponse extends Shape
{
    /**
     * @param array{
     *     LsaAnalysisId?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
