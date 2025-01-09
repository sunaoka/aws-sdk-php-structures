<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\DescribeResourceServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $UserPoolId
 * @property string $Identifier
 * @property string $Name
 * @property list<ResourceServerScopeType> $Scopes
 */
class ResourceServerType extends Shape
{
    /**
     * @param array{
     *     UserPoolId?: string,
     *     Identifier?: string,
     *     Name?: string,
     *     Scopes?: list<ResourceServerScopeType>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
