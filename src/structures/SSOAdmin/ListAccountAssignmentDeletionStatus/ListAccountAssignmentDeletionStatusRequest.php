<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignmentDeletionStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\OperationStatusFilter|null $Filter
 * @property string $InstanceArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListAccountAssignmentDeletionStatusRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\OperationStatusFilter|null,
     *     InstanceArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
