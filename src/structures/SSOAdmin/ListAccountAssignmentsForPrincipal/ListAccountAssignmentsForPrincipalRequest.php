<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignmentsForPrincipal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListAccountAssignmentsFilter $Filter
 * @property string $InstanceArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property string $PrincipalId
 * @property 'USER'|'GROUP' $PrincipalType
 */
class ListAccountAssignmentsForPrincipalRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\ListAccountAssignmentsFilter,
     *     InstanceArn: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     PrincipalId: string,
     *     PrincipalType: 'USER'|'GROUP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
