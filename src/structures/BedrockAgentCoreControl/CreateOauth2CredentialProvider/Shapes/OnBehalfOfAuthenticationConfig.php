<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NO_CLIENT' $clientAuthenticationMethod
 */
class OnBehalfOfAuthenticationConfig extends Shape
{
    /**
     * @param array{clientAuthenticationMethod: 'NO_CLIENT'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
