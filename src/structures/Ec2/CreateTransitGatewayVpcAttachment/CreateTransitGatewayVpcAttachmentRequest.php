<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayVpcAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayId
 * @property string $VpcId
 * @property list<string> $SubnetIds
 * @property Shapes\CreateTransitGatewayVpcAttachmentRequestOptions $Options
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateTransitGatewayVpcAttachmentRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayId: string,
     *     VpcId: string,
     *     SubnetIds: list<string>,
     *     Options?: Shapes\CreateTransitGatewayVpcAttachmentRequestOptions,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
