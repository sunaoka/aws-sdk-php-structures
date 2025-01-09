<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\CreateResourceServer\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ScopeName
 * @property string $ScopeDescription
 */
class ResourceServerScopeType extends Shape
{
    /**
     * @param array{
     *     ScopeName: string,
     *     ScopeDescription: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
