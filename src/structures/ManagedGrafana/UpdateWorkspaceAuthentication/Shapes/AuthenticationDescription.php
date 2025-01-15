<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\UpdateWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsSsoAuthentication|null $awsSso
 * @property list<'AWS_SSO'|'SAML'> $providers
 * @property SamlAuthentication|null $saml
 */
class AuthenticationDescription extends Shape
{
    /**
     * @param array{
     *     awsSso?: AwsSsoAuthentication|null,
     *     providers: list<'AWS_SSO'|'SAML'>,
     *     saml?: SamlAuthentication|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
