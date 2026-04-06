<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeNetworkInterfaceAttribute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\NetworkInterfaceAttachment|null $Attachment
 * @property Shapes\AttributeValue|null $Description
 * @property list<Shapes\GroupIdentifier>|null $Groups
 * @property string|null $NetworkInterfaceId
 * @property Shapes\AttributeBooleanValue|null $SourceDestCheck
 */
class DescribeNetworkInterfaceAttributeResponse extends Response
{
}
