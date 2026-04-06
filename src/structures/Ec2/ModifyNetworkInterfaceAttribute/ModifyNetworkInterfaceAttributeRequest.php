<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyNetworkInterfaceAttribute;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\NetworkInterfaceAttachmentChanges|null $Attachment
 * @property Shapes\AttributeValue|null $Description
 * @property bool|null $DryRun
 * @property list<string>|null $Groups
 * @property string $NetworkInterfaceId
 * @property Shapes\AttributeBooleanValue|null $SourceDestCheck
 * @property Shapes\EnaSrdSpecification|null $EnaSrdSpecification
 * @property bool|null $EnablePrimaryIpv6
 */
class ModifyNetworkInterfaceAttributeRequest extends Request
{
    /**
     * @param array{
     *     Attachment?: Shapes\NetworkInterfaceAttachmentChanges|null,
     *     Description?: Shapes\AttributeValue|null,
     *     DryRun?: bool|null,
     *     Groups?: list<string>|null,
     *     NetworkInterfaceId: string,
     *     SourceDestCheck?: Shapes\AttributeBooleanValue|null,
     *     EnaSrdSpecification?: Shapes\EnaSrdSpecification|null,
     *     EnablePrimaryIpv6?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
