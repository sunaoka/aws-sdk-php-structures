<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayVpcAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayAttachmentId
 * @property list<string>|null $AddSubnetIds
 * @property list<string>|null $RemoveSubnetIds
 * @property Shapes\ModifyTransitGatewayVpcAttachmentRequestOptions|null $Options
 * @property bool|null $DryRun
 */
class ModifyTransitGatewayVpcAttachmentRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId: string,
     *     AddSubnetIds?: list<string>|null,
     *     RemoveSubnetIds?: list<string>|null,
     *     Options?: Shapes\ModifyTransitGatewayVpcAttachmentRequestOptions|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
