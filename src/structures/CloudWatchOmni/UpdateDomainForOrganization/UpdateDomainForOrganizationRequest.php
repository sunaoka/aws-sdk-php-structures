<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateDomainForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainId
 * @property string|null $name
 * @property list<'IAM'|'IDC'>|null $identityProviders
 * @property Shapes\IdentityProviderConfiguration|null $identityProviderConfiguration
 */
class UpdateDomainForOrganizationRequest extends Request
{
    /**
     * @param array{
     *     domainId: string,
     *     name?: string|null,
     *     identityProviders?: list<'IAM'|'IDC'>|null,
     *     identityProviderConfiguration?: Shapes\IdentityProviderConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
