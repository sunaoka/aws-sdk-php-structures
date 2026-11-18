<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayPeeringAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayAttachmentId
 * @property Shapes\ModifyTransitGatewayPeeringAttachmentRequestOptions|null $Options
 * @property bool|null $DryRun
 */
class ModifyTransitGatewayPeeringAttachmentRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId: string,
     *     Options?: Shapes\ModifyTransitGatewayPeeringAttachmentRequestOptions|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
