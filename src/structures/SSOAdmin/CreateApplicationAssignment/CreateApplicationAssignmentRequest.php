<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\CreateApplicationAssignment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationArn
 * @property string $PrincipalId
 * @property 'USER'|'GROUP' $PrincipalType
 */
class CreateApplicationAssignmentRequest extends Request
{
    /**
     * @param array{
     *     ApplicationArn: string,
     *     PrincipalId: string,
     *     PrincipalType: 'USER'|'GROUP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
