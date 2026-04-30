<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateOauth2CredentialProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'M2M'|'AWS_IAM_ID_TOKEN_JWT' $actorTokenContent
 * @property list<string>|null $actorTokenScopes
 */
class TokenExchangeGrantTypeConfigType extends Shape
{
    /**
     * @param array{
     *     actorTokenContent: 'NONE'|'M2M'|'AWS_IAM_ID_TOKEN_JWT',
     *     actorTokenScopes?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
