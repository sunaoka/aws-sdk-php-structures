<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignmentCreationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\OperationStatusFilter|null $Filter
 */
class ListAccountAssignmentCreationStatusRequest extends Request
{
    /**
     * @param array{
     *     InstanceArn: string,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Filter?: Shapes\OperationStatusFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
