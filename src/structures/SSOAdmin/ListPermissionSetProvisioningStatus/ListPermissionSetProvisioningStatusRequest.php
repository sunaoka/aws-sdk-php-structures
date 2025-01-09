<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListPermissionSetProvisioningStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\OperationStatusFilter $Filter
 * @property string $InstanceArn
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 */
class ListPermissionSetProvisioningStatusRequest extends Request
{
    /**
     * @param array{
     *     Filter?: Shapes\OperationStatusFilter,
     *     InstanceArn: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
