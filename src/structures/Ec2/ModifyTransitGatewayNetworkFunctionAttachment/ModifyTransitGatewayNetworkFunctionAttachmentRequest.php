<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyTransitGatewayNetworkFunctionAttachment;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayAttachmentId
 * @property list<string>|null $AddAvailabilityZones
 * @property list<string>|null $AddAvailabilityZoneIds
 * @property list<string>|null $RemoveAvailabilityZones
 * @property list<string>|null $RemoveAvailabilityZoneIds
 * @property bool|null $DryRun
 */
class ModifyTransitGatewayNetworkFunctionAttachmentRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayAttachmentId: string,
     *     AddAvailabilityZones?: list<string>|null,
     *     AddAvailabilityZoneIds?: list<string>|null,
     *     RemoveAvailabilityZones?: list<string>|null,
     *     RemoveAvailabilityZoneIds?: list<string>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
