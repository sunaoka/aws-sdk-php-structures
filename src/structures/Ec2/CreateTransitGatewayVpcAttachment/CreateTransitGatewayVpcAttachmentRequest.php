<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayVpcAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayId
 * @property string $VpcId
 * @property list<string> $SubnetIds
 * @property Shapes\CreateTransitGatewayVpcAttachmentRequestOptions|null $Options
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateTransitGatewayVpcAttachmentRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayId: string,
     *     VpcId: string,
     *     SubnetIds: list<string>,
     *     Options?: Shapes\CreateTransitGatewayVpcAttachmentRequestOptions|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
