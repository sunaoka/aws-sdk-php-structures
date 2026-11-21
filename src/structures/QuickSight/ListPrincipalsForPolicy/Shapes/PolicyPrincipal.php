<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListPrincipalsForPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrincipalArn
 * @property 'USER'|'GROUP'|'ACCOUNT'|null $PrincipalType
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property int<1, max>|null $Revision
 */
class PolicyPrincipal extends Shape
{
    /**
     * @param array{
     *     PrincipalArn: string,
     *     PrincipalType?: 'USER'|'GROUP'|'ACCOUNT'|null,
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Revision?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
