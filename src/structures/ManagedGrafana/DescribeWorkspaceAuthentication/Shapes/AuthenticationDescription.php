<?php

namespace Sunaoka\Aws\Structures\ManagedGrafana\DescribeWorkspaceAuthentication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsSsoAuthentication $awsSso
 * @property list<'AWS_SSO'|'SAML'> $providers
 * @property SamlAuthentication $saml
 */
class AuthenticationDescription extends Shape
{
    /**
     * @param array{
     *     awsSso?: AwsSsoAuthentication,
     *     providers: list<'AWS_SSO'|'SAML'>,
     *     saml?: SamlAuthentication
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
