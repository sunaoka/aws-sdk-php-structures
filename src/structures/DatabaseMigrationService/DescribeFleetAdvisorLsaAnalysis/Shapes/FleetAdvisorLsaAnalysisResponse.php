<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\DescribeFleetAdvisorLsaAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LsaAnalysisId
 * @property string|null $Status
 */
class FleetAdvisorLsaAnalysisResponse extends Shape
{
    /**
     * @param array{
     *     LsaAnalysisId?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
