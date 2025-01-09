<?php

namespace Sunaoka\Aws\Structures\CodeBuild\BatchGetReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property double $lineCoveragePercentage
 * @property int<0, max> $linesCovered
 * @property int<0, max> $linesMissed
 * @property double $branchCoveragePercentage
 * @property int<0, max> $branchesCovered
 * @property int<0, max> $branchesMissed
 */
class CodeCoverageReportSummary extends Shape
{
    /**
     * @param array{
     *     lineCoveragePercentage?: double,
     *     linesCovered?: int<0, max>,
     *     linesMissed?: int<0, max>,
     *     branchCoveragePercentage?: double,
     *     branchesCovered?: int<0, max>,
     *     branchesMissed?: int<0, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
