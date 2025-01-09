<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DescribeCodeCoverages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportArn
 * @property string $nextToken
 * @property int $maxResults
 * @property 'ASCENDING'|'DESCENDING' $sortOrder
 * @property 'LINE_COVERAGE_PERCENTAGE'|'FILE_PATH' $sortBy
 * @property double $minLineCoveragePercentage
 * @property double $maxLineCoveragePercentage
 */
class DescribeCodeCoveragesRequest extends Request
{
    /**
     * @param array{
     *     reportArn: string,
     *     nextToken?: string,
     *     maxResults?: int,
     *     sortOrder?: 'ASCENDING'|'DESCENDING',
     *     sortBy?: 'LINE_COVERAGE_PERCENTAGE'|'FILE_PATH',
     *     minLineCoveragePercentage?: double,
     *     maxLineCoveragePercentage?: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
