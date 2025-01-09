<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAssignmentsForPrincipal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListApplicationAssignmentsFilter $Filter
 * @property string $InstanceArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property string $PrincipalId
 * @property 'USER'|'GROUP' $PrincipalType
 */
class ListApplicationAssignmentsForPrincipalRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\ListApplicationAssignmentsFilter,
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
