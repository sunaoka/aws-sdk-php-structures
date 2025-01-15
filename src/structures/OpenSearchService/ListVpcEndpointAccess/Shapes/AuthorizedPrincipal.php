<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\ListVpcEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_ACCOUNT'|'AWS_SERVICE'|null $PrincipalType
 * @property string|null $Principal
 */
class AuthorizedPrincipal extends Shape
{
    /**
     * @param array{
     *     PrincipalType?: 'AWS_ACCOUNT'|'AWS_SERVICE'|null,
     *     Principal?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
