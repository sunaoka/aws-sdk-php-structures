<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAssignmentsForPrincipal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ApplicationArn
 * @property string|null $PrincipalId
 * @property 'USER'|'GROUP'|null $PrincipalType
 */
class ApplicationAssignmentForPrincipal extends Shape
{
    /**
     * @param array{
     *     ApplicationArn?: string|null,
     *     PrincipalId?: string|null,
     *     PrincipalType?: 'USER'|'GROUP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
