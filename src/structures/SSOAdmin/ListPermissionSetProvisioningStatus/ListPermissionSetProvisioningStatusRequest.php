<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListPermissionSetProvisioningStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceArn
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\OperationStatusFilter|null $Filter
 */
class ListPermissionSetProvisioningStatusRequest extends Request
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
