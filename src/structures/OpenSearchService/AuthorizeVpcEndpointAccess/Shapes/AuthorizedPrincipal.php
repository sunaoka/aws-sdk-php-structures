<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\AuthorizeVpcEndpointAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_ACCOUNT'|'AWS_SERVICE'|null $PrincipalType
 * @property string|null $Principal
 * @property ServiceOptions|null $ServiceOptions
 */
class AuthorizedPrincipal extends Shape
{
    /**
     * @param array{
     *     PrincipalType?: 'AWS_ACCOUNT'|'AWS_SERVICE'|null,
     *     Principal?: string|null,
     *     ServiceOptions?: ServiceOptions|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
