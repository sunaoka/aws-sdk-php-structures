<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceComplianceSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ComplianceStringFilter>|null $Filters
 * @property string|null $NextToken
 * @property int<1, 50>|null $MaxResults
 */
class ListResourceComplianceSummariesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ComplianceStringFilter>|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
