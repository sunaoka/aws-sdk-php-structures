<?php

namespace Sunaoka\Aws\Structures\CodeBuild\DescribeCodeCoverages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $reportArn
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property 'ASCENDING'|'DESCENDING'|null $sortOrder
 * @property 'LINE_COVERAGE_PERCENTAGE'|'FILE_PATH'|null $sortBy
 * @property double|null $minLineCoveragePercentage
 * @property double|null $maxLineCoveragePercentage
 */
class DescribeCodeCoveragesRequest extends Request
{
    /**
     * @param array{
     *     reportArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     sortOrder?: 'ASCENDING'|'DESCENDING'|null,
     *     sortBy?: 'LINE_COVERAGE_PERCENTAGE'|'FILE_PATH'|null,
     *     minLineCoveragePercentage?: double|null,
     *     maxLineCoveragePercentage?: double|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
