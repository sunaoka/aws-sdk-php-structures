<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\ListWorkspaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AWS_SSO'|'SAML'> $providers
 * @property 'CONFIGURED'|'NOT_CONFIGURED' $samlConfigurationStatus
 */
class AuthenticationSummary extends Shape
{
    /**
     * @param array{
     *     providers: list<'AWS_SSO'|'SAML'>,
     *     samlConfigurationStatus?: 'CONFIGURED'|'NOT_CONFIGURED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
