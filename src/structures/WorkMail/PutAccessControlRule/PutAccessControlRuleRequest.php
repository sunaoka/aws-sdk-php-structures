<?php

namespace Sunaoka\Aws\Structures\WorkMail\PutAccessControlRule;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property 'ALLOW'|'DENY' $Effect
 * @property string $Description
 * @property list<string>|null $IpRanges
 * @property list<string>|null $NotIpRanges
 * @property list<string>|null $Actions
 * @property list<string>|null $NotActions
 * @property list<string>|null $UserIds
 * @property list<string>|null $NotUserIds
 * @property string $OrganizationId
 * @property list<string>|null $ImpersonationRoleIds
 * @property list<string>|null $NotImpersonationRoleIds
 */
class PutAccessControlRuleRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Effect: 'ALLOW'|'DENY',
     *     Description: string,
     *     IpRanges?: list<string>|null,
     *     NotIpRanges?: list<string>|null,
     *     Actions?: list<string>|null,
     *     NotActions?: list<string>|null,
     *     UserIds?: list<string>|null,
     *     NotUserIds?: list<string>|null,
     *     OrganizationId: string,
     *     ImpersonationRoleIds?: list<string>|null,
     *     NotImpersonationRoleIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
