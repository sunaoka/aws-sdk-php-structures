<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\UpdateResourceServer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 * @property string $Identifier
 * @property string $Name
 * @property list<Shapes\ResourceServerScopeType> $Scopes
 */
class UpdateResourceServerRequest extends Request
{
    /**
     * @param array{
     *     UserPoolId: string,
     *     Identifier: string,
     *     Name: string,
     *     Scopes?: list<Shapes\ResourceServerScopeType>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
