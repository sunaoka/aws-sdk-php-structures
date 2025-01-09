<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceComplianceSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ComplianceStringFilter> $Filters
 * @property string $NextToken
 * @property int<1, 50> $MaxResults
 */
class ListResourceComplianceSummariesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ComplianceStringFilter>,
     *     NextToken?: string,
     *     MaxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
