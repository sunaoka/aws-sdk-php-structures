<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayVpcAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayAttachmentId
 * @property list<string> $AddSubnetIds
 * @property list<string> $RemoveSubnetIds
 * @property Shapes\ModifyTransitGatewayVpcAttachmentRequestOptions $Options
 * @property bool $DryRun
 */
class ModifyTransitGatewayVpcAttachmentRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId: string,
     *     AddSubnetIds?: list<string>,
     *     RemoveSubnetIds?: list<string>,
     *     Options?: Shapes\ModifyTransitGatewayVpcAttachmentRequestOptions,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
