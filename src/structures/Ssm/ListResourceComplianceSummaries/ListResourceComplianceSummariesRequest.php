<?php

namespace Sunaoka\Aws\Structures\Ssm\ListResourceComplianceSummaries;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\ComplianceStringFilter> $Filters
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListResourceComplianceSummariesRequest extends Request
{
    /**
     * @param array{
     *     Filters?: list<Shapes\ComplianceStringFilter>,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
