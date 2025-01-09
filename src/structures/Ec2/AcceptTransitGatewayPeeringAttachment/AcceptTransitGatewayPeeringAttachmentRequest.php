<?php

namespace Sunaoka\Aws\Structures\Ec2\AcceptTransitGatewayPeeringAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayAttachmentId
 * @property bool $DryRun
 */
class AcceptTransitGatewayPeeringAttachmentRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
