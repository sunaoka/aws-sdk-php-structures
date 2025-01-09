<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceAttribute;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<Shapes\InstanceBlockDeviceMapping> $BlockDeviceMappings
 * @property Shapes\AttributeBooleanValue $DisableApiTermination
 * @property Shapes\AttributeBooleanValue $EnaSupport
 * @property Shapes\EnclaveOptions $EnclaveOptions
 * @property Shapes\AttributeBooleanValue $EbsOptimized
 * @property string $InstanceId
 * @property Shapes\AttributeValue $InstanceInitiatedShutdownBehavior
 * @property Shapes\AttributeValue $InstanceType
 * @property Shapes\AttributeValue $KernelId
 * @property list<Shapes\ProductCode> $ProductCodes
 * @property Shapes\AttributeValue $RamdiskId
 * @property Shapes\AttributeValue $RootDeviceName
 * @property Shapes\AttributeBooleanValue $SourceDestCheck
 * @property Shapes\AttributeValue $SriovNetSupport
 * @property Shapes\AttributeValue $UserData
 * @property Shapes\AttributeBooleanValue $DisableApiStop
 * @property list<Shapes\GroupIdentifier> $Groups
 */
class DescribeInstanceAttributeResponse extends Response
{
}
