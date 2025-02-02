<?php

namespace Sunaoka\Aws\Structures\Ec2\AssociateTransitGatewayPolicyTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayPolicyTableId
 * @property string $TransitGatewayAttachmentId
 * @property bool|null $DryRun
 */
class AssociateTransitGatewayPolicyTableRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayPolicyTableId: string,
     *     TransitGatewayAttachmentId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
