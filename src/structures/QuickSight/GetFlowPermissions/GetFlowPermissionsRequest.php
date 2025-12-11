<?php

namespace Sunaoka\Aws\Structures\QuickSight\GetFlowPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $FlowId
 */
class GetFlowPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     FlowId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
