<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttachTime
 * @property string $AttachmentId
 * @property bool $DeleteOnTermination
 * @property int $DeviceIndex
 * @property string $InstanceId
 * @property string $InstanceOwnerId
 * @property string $Status
 */
class AwsEc2NetworkInterfaceAttachment extends Shape
{
    /**
     * @param array{
     *     AttachTime?: string,
     *     AttachmentId?: string,
     *     DeleteOnTermination?: bool,
     *     DeviceIndex?: int,
     *     InstanceId?: string,
     *     InstanceOwnerId?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
