<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateFirewallAnalysisSettings;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<'TLS_SNI'|'HTTP_HOST'>|null $EnabledAnalysisTypes
 * @property string|null $FirewallArn
 * @property string|null $FirewallName
 * @property string|null $UpdateToken
 */
class UpdateFirewallAnalysisSettingsResponse extends Response
{
}
