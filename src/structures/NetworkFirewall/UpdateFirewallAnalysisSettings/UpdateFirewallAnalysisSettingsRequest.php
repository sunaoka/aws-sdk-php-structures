<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallAnalysisSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'TLS_SNI'|'HTTP_HOST'>|null $EnabledAnalysisTypes
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property string|null $UpdateToken
 */
class UpdateFirewallAnalysisSettingsRequest extends Request
{
    /**
     * @param array{
     *     EnabledAnalysisTypes?: list<'TLS_SNI'|'HTTP_HOST'>|null,
     *     FirewallArn?: string|null,
     *     FirewallName?: string|null,
     *     UpdateToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
