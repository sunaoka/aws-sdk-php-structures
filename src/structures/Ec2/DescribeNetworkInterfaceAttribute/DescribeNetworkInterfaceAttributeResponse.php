<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfaceAttribute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\NetworkInterfaceAttachment $Attachment
 * @property Shapes\AttributeValue $Description
 * @property list<Shapes\GroupIdentifier> $Groups
 * @property string $NetworkInterfaceId
 * @property Shapes\AttributeBooleanValue $SourceDestCheck
 * @property bool $AssociatePublicIpAddress
 */
class DescribeNetworkInterfaceAttributeResponse extends Response
{
}
