<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DescribeCodeCoverages\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property string|null $reportARN
 * @property string|null $filePath
 * @property double|null $lineCoveragePercentage
 * @property int<0, max>|null $linesCovered
 * @property int<0, max>|null $linesMissed
 * @property double|null $branchCoveragePercentage
 * @property int<0, max>|null $branchesCovered
 * @property int<0, max>|null $branchesMissed
 * @property \Aws\Api\DateTimeResult|null $expired
 */
class CodeCoverage extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     reportARN?: string|null,
     *     filePath?: string|null,
     *     lineCoveragePercentage?: double|null,
     *     linesCovered?: int<0, max>|null,
     *     linesMissed?: int<0, max>|null,
     *     branchCoveragePercentage?: double|null,
     *     branchesCovered?: int<0, max>|null,
     *     branchesMissed?: int<0, max>|null,
     *     expired?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
