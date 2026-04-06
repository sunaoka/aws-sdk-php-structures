<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeImageAttribute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\BlockDeviceMapping>|null $BlockDeviceMappings
 * @property string|null $ImageId
 * @property list<Shapes\LaunchPermission>|null $LaunchPermissions
 * @property list<Shapes\ProductCode>|null $ProductCodes
 * @property Shapes\AttributeValue|null $Description
 * @property Shapes\AttributeValue|null $KernelId
 * @property Shapes\AttributeValue|null $RamdiskId
 * @property Shapes\AttributeValue|null $SriovNetSupport
 * @property Shapes\AttributeValue|null $BootMode
 * @property Shapes\AttributeValue|null $TpmSupport
 * @property Shapes\AttributeValue|null $UefiData
 * @property Shapes\AttributeValue|null $LastLaunchedTime
 * @property Shapes\AttributeValue|null $ImdsSupport
 * @property Shapes\AttributeValue|null $DeregistrationProtection
 */
class DescribeImageAttributeResponse extends Response
{
}
