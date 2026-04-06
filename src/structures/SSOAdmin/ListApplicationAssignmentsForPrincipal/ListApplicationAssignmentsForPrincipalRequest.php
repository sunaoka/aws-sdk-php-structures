<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAssignmentsForPrincipal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ListApplicationAssignmentsFilter|null $Filter
 * @property string $InstanceArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string $PrincipalId
 * @property 'USER'|'GROUP' $PrincipalType
 */
class ListApplicationAssignmentsForPrincipalRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\ListApplicationAssignmentsFilter|null,
     *     InstanceArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     PrincipalId: string,
     *     PrincipalType: 'USER'|'GROUP'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
