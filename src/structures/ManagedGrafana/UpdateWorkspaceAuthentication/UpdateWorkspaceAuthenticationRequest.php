<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceAuthentication;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<'AWS_SSO'|'SAML'> $authenticationProviders
 * @property Shapes\SamlConfiguration $samlConfiguration
 * @property string $workspaceId
 */
class UpdateWorkspaceAuthenticationRequest extends Request
{
    /**
     * @param array{
     *     authenticationProviders: list<'AWS_SSO'|'SAML'>,
     *     samlConfiguration?: Shapes\SamlConfiguration,
     *     workspaceId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
