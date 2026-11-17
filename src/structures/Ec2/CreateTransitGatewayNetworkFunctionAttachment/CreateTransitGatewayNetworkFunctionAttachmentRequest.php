<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayNetworkFunctionAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayId
 * @property string $ServiceName
 * @property list<string>|null $AvailabilityZones
 * @property list<string>|null $AvailabilityZoneIds
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateTransitGatewayNetworkFunctionAttachmentRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayId: string,
     *     ServiceName: string,
     *     AvailabilityZones?: list<string>|null,
     *     AvailabilityZoneIds?: list<string>|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
