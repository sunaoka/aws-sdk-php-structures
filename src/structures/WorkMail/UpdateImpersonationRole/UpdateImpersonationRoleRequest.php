<?php

namespace Sunaoka\Aws\Structures\WorkMail\UpdateImpersonationRole;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $ImpersonationRoleId
 * @property string $Name
 * @property 'FULL_ACCESS'|'READ_ONLY' $Type
 * @property string|null $Description
 * @property list<Shapes\ImpersonationRule> $Rules
 */
class UpdateImpersonationRoleRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     ImpersonationRoleId: string,
     *     Name: string,
     *     Type: 'FULL_ACCESS'|'READ_ONLY',
     *     Description?: string|null,
     *     Rules: list<Shapes\ImpersonationRule>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
