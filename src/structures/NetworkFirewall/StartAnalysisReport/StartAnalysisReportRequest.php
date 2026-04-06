<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\StartAnalysisReport;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $FirewallName
 * @property string|null $FirewallArn
 * @property 'TLS_SNI'|'HTTP_HOST' $AnalysisType
 */
class StartAnalysisReportRequest extends Request
{
    /**
     * @param array{
     *     FirewallName?: string|null,
     *     FirewallArn?: string|null,
     *     AnalysisType: 'TLS_SNI'|'HTTP_HOST'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
