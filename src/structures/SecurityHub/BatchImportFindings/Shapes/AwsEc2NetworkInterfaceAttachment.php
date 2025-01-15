<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttachTime
 * @property string|null $AttachmentId
 * @property bool|null $DeleteOnTermination
 * @property int|null $DeviceIndex
 * @property string|null $InstanceId
 * @property string|null $InstanceOwnerId
 * @property string|null $Status
 */
class AwsEc2NetworkInterfaceAttachment extends Shape
{
    /**
     * @param array{
     *     AttachTime?: string|null,
     *     AttachmentId?: string|null,
     *     DeleteOnTermination?: bool|null,
     *     DeviceIndex?: int|null,
     *     InstanceId?: string|null,
     *     InstanceOwnerId?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
