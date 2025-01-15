<?php

namespace Sunaoka\Aws\Structures\CostandUsageReportService\DescribeReportDefinitions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<5, 5>|null $MaxResults
 * @property string|null $NextToken
 */
class DescribeReportDefinitionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<5, 5>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
