<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAssignmentsForPrincipal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationArn
 * @property string $PrincipalId
 * @property 'USER'|'GROUP' $PrincipalType
 */
class ApplicationAssignmentForPrincipal extends Shape
{
    /**
     * @param array{
     *     ApplicationArn?: string,
     *     PrincipalId?: string,
     *     PrincipalType?: 'USER'|'GROUP'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
