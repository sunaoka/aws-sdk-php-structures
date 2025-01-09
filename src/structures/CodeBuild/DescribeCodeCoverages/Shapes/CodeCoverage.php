<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DescribeCodeCoverages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $reportARN
 * @property string $filePath
 * @property double $lineCoveragePercentage
 * @property int $linesCovered
 * @property int $linesMissed
 * @property double $branchCoveragePercentage
 * @property int $branchesCovered
 * @property int $branchesMissed
 * @property \Aws\Api\DateTimeResult $expired
 */
class CodeCoverage extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     reportARN?: string,
     *     filePath?: string,
     *     lineCoveragePercentage?: double,
     *     linesCovered?: int,
     *     linesMissed?: int,
     *     branchCoveragePercentage?: double,
     *     branchesCovered?: int,
     *     branchesMissed?: int,
     *     expired?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
