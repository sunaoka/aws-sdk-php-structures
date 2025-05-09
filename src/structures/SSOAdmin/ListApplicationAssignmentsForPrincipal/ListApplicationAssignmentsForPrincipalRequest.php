<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAssignmentsForPrincipal;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property string $PrincipalId
 * @property 'USER'|'GROUP' $PrincipalType
 * @property Shapes\ListApplicationAssignmentsFilter|null $Filter
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListApplicationAssignmentsForPrincipalRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     PrincipalId: string,
     *     PrincipalType: 'USER'|'GROUP',
     *     Filter?: Shapes\ListApplicationAssignmentsFilter|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
