<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayPolicyTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayPolicyTableId
 * @property bool $DryRun
 */
class DeleteTransitGatewayPolicyTableRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayPolicyTableId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
