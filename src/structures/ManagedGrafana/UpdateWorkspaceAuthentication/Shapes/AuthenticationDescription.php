<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'AWS_SSO'|'SAML'> $providers
 * @property SamlAuthentication|null $saml
 * @property AwsSsoAuthentication|null $awsSso
 */
class AuthenticationDescription extends Shape
{
    /**
     * @param array{
     *     providers: list<'AWS_SSO'|'SAML'>,
     *     saml?: SamlAuthentication|null,
     *     awsSso?: AwsSsoAuthentication|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
