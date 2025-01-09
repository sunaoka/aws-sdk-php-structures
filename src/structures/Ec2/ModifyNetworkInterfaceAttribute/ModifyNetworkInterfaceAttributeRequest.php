<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyNetworkInterfaceAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\EnaSrdSpecification $EnaSrdSpecification
 * @property bool $EnablePrimaryIpv6
 * @property Shapes\ConnectionTrackingSpecificationRequest $ConnectionTrackingSpecification
 * @property bool $AssociatePublicIpAddress
 * @property bool $DryRun
 * @property string $NetworkInterfaceId
 * @property Shapes\AttributeValue $Description
 * @property Shapes\AttributeBooleanValue $SourceDestCheck
 * @property list<string> $Groups
 * @property Shapes\NetworkInterfaceAttachmentChanges $Attachment
 */
class ModifyNetworkInterfaceAttributeRequest extends Request
{
    /**
     * @param array{
     *     EnaSrdSpecification?: Shapes\EnaSrdSpecification,
     *     EnablePrimaryIpv6?: bool,
     *     ConnectionTrackingSpecification?: Shapes\ConnectionTrackingSpecificationRequest,
     *     AssociatePublicIpAddress?: bool,
     *     DryRun?: bool,
     *     NetworkInterfaceId: string,
     *     Description?: Shapes\AttributeValue,
     *     SourceDestCheck?: Shapes\AttributeBooleanValue,
     *     Groups?: list<string>,
     *     Attachment?: Shapes\NetworkInterfaceAttachmentChanges
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
