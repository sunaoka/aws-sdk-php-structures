<?php

namespace Sunaoka\Aws\Structures\Glue\RegisterConnectionType\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'BASIC'|'OAUTH2'|'CUSTOM'|'IAM'> $AuthenticationTypes
 * @property ConnectorOAuth2Properties|null $OAuth2Properties
 * @property BasicAuthenticationProperties|null $BasicAuthenticationProperties
 * @property CustomAuthenticationProperties|null $CustomAuthenticationProperties
 */
class ConnectorAuthenticationConfiguration extends Shape
{
    /**
     * @param array{
     *     AuthenticationTypes: list<'BASIC'|'OAUTH2'|'CUSTOM'|'IAM'>,
     *     OAuth2Properties?: ConnectorOAuth2Properties|null,
     *     BasicAuthenticationProperties?: BasicAuthenticationProperties|null,
     *     CustomAuthenticationProperties?: CustomAuthenticationProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
