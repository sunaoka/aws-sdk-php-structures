<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListAccessControlRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'ALLOW'|'DENY'|null $Effect
 * @property string|null $Description
 * @property list<string>|null $IpRanges
 * @property list<string>|null $NotIpRanges
 * @property list<string>|null $Actions
 * @property list<string>|null $NotActions
 * @property list<string>|null $UserIds
 * @property list<string>|null $NotUserIds
 * @property \Aws\Api\DateTimeResult|null $DateCreated
 * @property \Aws\Api\DateTimeResult|null $DateModified
 * @property list<string>|null $ImpersonationRoleIds
 * @property list<string>|null $NotImpersonationRoleIds
 */
class AccessControlRule extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Effect?: 'ALLOW'|'DENY'|null,
     *     Description?: string|null,
     *     IpRanges?: list<string>|null,
     *     NotIpRanges?: list<string>|null,
     *     Actions?: list<string>|null,
     *     NotActions?: list<string>|null,
     *     UserIds?: list<string>|null,
     *     NotUserIds?: list<string>|null,
     *     DateCreated?: \Aws\Api\DateTimeResult|null,
     *     DateModified?: \Aws\Api\DateTimeResult|null,
     *     ImpersonationRoleIds?: list<string>|null,
     *     NotImpersonationRoleIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
