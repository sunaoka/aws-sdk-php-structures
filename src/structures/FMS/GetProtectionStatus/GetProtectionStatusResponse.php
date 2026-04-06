<?php

namespace Sunaoka\Aws\Structures\FMS\GetProtectionStatus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AdminAccountId
 * @property 'WAF'|'WAFV2'|'SHIELD_ADVANCED'|'SECURITY_GROUPS_COMMON'|'SECURITY_GROUPS_CONTENT_AUDIT'|'SECURITY_GROUPS_USAGE_AUDIT'|'NETWORK_FIREWALL'|'DNS_FIREWALL'|'THIRD_PARTY_FIREWALL'|'IMPORT_NETWORK_FIREWALL'|'NETWORK_ACL_COMMON'|null $ServiceType
 * @property string|null $Data
 * @property string|null $NextToken
 */
class GetProtectionStatusResponse extends Response
{
}
