<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\CreateDomainAccessGrantForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string $name
 * @property Shapes\OrganizationAccessGrantPrincipal $principal
 * @property 'ADMIN' $permission
 * @property array<string, string>|null $tags
 * @property string|null $clientToken
 */
class CreateDomainAccessGrantForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     name: string,
     *     principal: Shapes\OrganizationAccessGrantPrincipal,
     *     permission: 'ADMIN',
     *     tags?: array<string, string>|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
