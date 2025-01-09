<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageAttribute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\AttributeValue $Description
 * @property Shapes\AttributeValue $KernelId
 * @property Shapes\AttributeValue $RamdiskId
 * @property Shapes\AttributeValue $SriovNetSupport
 * @property Shapes\AttributeValue $BootMode
 * @property Shapes\AttributeValue $TpmSupport
 * @property Shapes\AttributeValue $UefiData
 * @property Shapes\AttributeValue $LastLaunchedTime
 * @property Shapes\AttributeValue $ImdsSupport
 * @property Shapes\AttributeValue $DeregistrationProtection
 * @property string $ImageId
 * @property list<Shapes\LaunchPermission> $LaunchPermissions
 * @property list<Shapes\ProductCode> $ProductCodes
 * @property list<Shapes\BlockDeviceMapping> $BlockDeviceMappings
 */
class DescribeImageAttributeResponse extends Response
{
}
