<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DescribeCodeCoverages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property string $reportARN
 * @property string $filePath
 * @property double $lineCoveragePercentage
 * @property int<0, max> $linesCovered
 * @property int<0, max> $linesMissed
 * @property double $branchCoveragePercentage
 * @property int<0, max> $branchesCovered
 * @property int<0, max> $branchesMissed
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
     *     linesCovered?: int<0, max>,
     *     linesMissed?: int<0, max>,
     *     branchCoveragePercentage?: double,
     *     branchesCovered?: int<0, max>,
     *     branchesMissed?: int<0, max>,
     *     expired?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
