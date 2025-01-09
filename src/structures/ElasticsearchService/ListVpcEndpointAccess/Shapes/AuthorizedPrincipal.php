<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\ListVpcEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_ACCOUNT'|'AWS_SERVICE' $PrincipalType
 * @property string $Principal
 */
class AuthorizedPrincipal extends Shape
{
    /**
     * @param array{
     *     PrincipalType?: 'AWS_ACCOUNT'|'AWS_SERVICE',
     *     Principal?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
