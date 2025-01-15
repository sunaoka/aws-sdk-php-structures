<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateResourceServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $UserPoolId
 * @property string|null $Identifier
 * @property string|null $Name
 * @property list<ResourceServerScopeType>|null $Scopes
 */
class ResourceServerType extends Shape
{
    /**
     * @param array{
     *     UserPoolId?: string|null,
     *     Identifier?: string|null,
     *     Name?: string|null,
     *     Scopes?: list<ResourceServerScopeType>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
