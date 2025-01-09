<?php

namespace Sunaoka\Aws\Structures\WorkMail\ListAccessControlRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'ALLOW'|'DENY' $Effect
 * @property string $Description
 * @property list<string> $IpRanges
 * @property list<string> $NotIpRanges
 * @property list<string> $Actions
 * @property list<string> $NotActions
 * @property list<string> $UserIds
 * @property list<string> $NotUserIds
 * @property \Aws\Api\DateTimeResult $DateCreated
 * @property \Aws\Api\DateTimeResult $DateModified
 * @property list<string> $ImpersonationRoleIds
 * @property list<string> $NotImpersonationRoleIds
 */
class AccessControlRule extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Effect?: 'ALLOW'|'DENY',
     *     Description?: string,
     *     IpRanges?: list<string>,
     *     NotIpRanges?: list<string>,
     *     Actions?: list<string>,
     *     NotActions?: list<string>,
     *     UserIds?: list<string>,
     *     NotUserIds?: list<string>,
     *     DateCreated?: \Aws\Api\DateTimeResult,
     *     DateModified?: \Aws\Api\DateTimeResult,
     *     ImpersonationRoleIds?: list<string>,
     *     NotImpersonationRoleIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
