<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double|null $lineCoveragePercentage
 * @property int<0, max>|null $linesCovered
 * @property int<0, max>|null $linesMissed
 * @property double|null $branchCoveragePercentage
 * @property int<0, max>|null $branchesCovered
 * @property int<0, max>|null $branchesMissed
 */
class CodeCoverageReportSummary extends Shape
{
    /**
     * @param array{
     *     lineCoveragePercentage?: double|null,
     *     linesCovered?: int<0, max>|null,
     *     linesMissed?: int<0, max>|null,
     *     branchCoveragePercentage?: double|null,
     *     branchesCovered?: int<0, max>|null,
     *     branchesMissed?: int<0, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
