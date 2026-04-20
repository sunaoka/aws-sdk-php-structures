<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayClientVpnAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayAttachmentId
 * @property bool|null $DryRun
 */
class DeleteTransitGatewayClientVpnAttachmentRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
