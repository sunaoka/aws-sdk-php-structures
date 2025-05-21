<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\GetAnalysisReportResults;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FirewallName
 * @property string $AnalysisReportId
 * @property string|null $FirewallArn
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class GetAnalysisReportResultsRequest extends Request
{
    /**
     * @param array{
     *     FirewallName?: string|null,
     *     AnalysisReportId: string,
     *     FirewallArn?: string|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
