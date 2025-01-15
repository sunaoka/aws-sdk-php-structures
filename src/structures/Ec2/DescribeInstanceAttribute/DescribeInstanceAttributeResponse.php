<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceAttribute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\InstanceBlockDeviceMapping>|null $BlockDeviceMappings
 * @property Shapes\AttributeBooleanValue|null $DisableApiTermination
 * @property Shapes\AttributeBooleanValue|null $EnaSupport
 * @property Shapes\EnclaveOptions|null $EnclaveOptions
 * @property Shapes\AttributeBooleanValue|null $EbsOptimized
 * @property string|null $InstanceId
 * @property Shapes\AttributeValue|null $InstanceInitiatedShutdownBehavior
 * @property Shapes\AttributeValue|null $InstanceType
 * @property Shapes\AttributeValue|null $KernelId
 * @property list<Shapes\ProductCode>|null $ProductCodes
 * @property Shapes\AttributeValue|null $RamdiskId
 * @property Shapes\AttributeValue|null $RootDeviceName
 * @property Shapes\AttributeBooleanValue|null $SourceDestCheck
 * @property Shapes\AttributeValue|null $SriovNetSupport
 * @property Shapes\AttributeValue|null $UserData
 * @property Shapes\AttributeBooleanValue|null $DisableApiStop
 * @property list<Shapes\GroupIdentifier>|null $Groups
 */
class DescribeInstanceAttributeResponse extends Response
{
}
