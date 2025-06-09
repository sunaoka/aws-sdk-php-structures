<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyNetworkInterfaceAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EnaSrdSpecification|null $EnaSrdSpecification
 * @property bool|null $EnablePrimaryIpv6
 * @property Shapes\ConnectionTrackingSpecificationRequest|null $ConnectionTrackingSpecification
 * @property bool|null $AssociatePublicIpAddress
 * @property list<string>|null $AssociatedSubnetIds
 * @property bool|null $DryRun
 * @property string $NetworkInterfaceId
 * @property Shapes\AttributeValue|null $Description
 * @property Shapes\AttributeBooleanValue|null $SourceDestCheck
 * @property list<string>|null $Groups
 * @property Shapes\NetworkInterfaceAttachmentChanges|null $Attachment
 */
class ModifyNetworkInterfaceAttributeRequest extends Request
{
    /**
     * @param array{
     *     EnaSrdSpecification?: Shapes\EnaSrdSpecification|null,
     *     EnablePrimaryIpv6?: bool|null,
     *     ConnectionTrackingSpecification?: Shapes\ConnectionTrackingSpecificationRequest|null,
     *     AssociatePublicIpAddress?: bool|null,
     *     AssociatedSubnetIds?: list<string>|null,
     *     DryRun?: bool|null,
     *     NetworkInterfaceId: string,
     *     Description?: Shapes\AttributeValue|null,
     *     SourceDestCheck?: Shapes\AttributeBooleanValue|null,
     *     Groups?: list<string>|null,
     *     Attachment?: Shapes\NetworkInterfaceAttachmentChanges|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
