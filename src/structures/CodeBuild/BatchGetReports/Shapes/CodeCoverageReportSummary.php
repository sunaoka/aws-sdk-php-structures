<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $lineCoveragePercentage
 * @property int $linesCovered
 * @property int $linesMissed
 * @property double $branchCoveragePercentage
 * @property int $branchesCovered
 * @property int $branchesMissed
 */
class CodeCoverageReportSummary extends Shape
{
    /**
     * @param array{
     *     lineCoveragePercentage?: double,
     *     linesCovered?: int,
     *     linesMissed?: int,
     *     branchCoveragePercentage?: double,
     *     branchesCovered?: int,
     *     branchesMissed?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
