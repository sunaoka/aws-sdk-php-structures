<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TOKEN_EXCHANGE'|'JWT_AUTHORIZATION_GRANT' $grantType
 * @property TokenExchangeGrantTypeConfigType|null $tokenExchangeGrantTypeConfig
 * @property OnBehalfOfAuthenticationConfig|null $onBehalfOfAuthenticationConfig
 */
class OnBehalfOfTokenExchangeConfigType extends Shape
{
    /**
     * @param array{
     *     grantType: 'TOKEN_EXCHANGE'|'JWT_AUTHORIZATION_GRANT',
     *     tokenExchangeGrantTypeConfig?: TokenExchangeGrantTypeConfigType|null,
     *     onBehalfOfAuthenticationConfig?: OnBehalfOfAuthenticationConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
