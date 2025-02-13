<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateResourceServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Identifier
 * @property string $Name
 * @property list<Shapes\ResourceServerScopeType>|null $Scopes
 */
class CreateResourceServerRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Identifier: string,
     *     Name: string,
     *     Scopes?: list<Shapes\ResourceServerScopeType>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
