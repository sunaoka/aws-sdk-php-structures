<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceAuthentication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $workspaceId
 * @property list<'AWS_SSO'|'SAML'> $authenticationProviders
 * @property Shapes\SamlConfiguration|null $samlConfiguration
 */
class UpdateWorkspaceAuthenticationRequest extends Request
{
    /**
     * @param array{
     *     workspaceId: string,
     *     authenticationProviders: list<'AWS_SSO'|'SAML'>,
     *     samlConfiguration?: Shapes\SamlConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
