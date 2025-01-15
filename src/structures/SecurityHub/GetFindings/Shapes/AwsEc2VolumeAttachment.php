<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AttachTime
 * @property bool|null $DeleteOnTermination
 * @property string|null $InstanceId
 * @property string|null $Status
 */
class AwsEc2VolumeAttachment extends Shape
{
    /**
     * @param array{
     *     AttachTime?: string|null,
     *     DeleteOnTermination?: bool|null,
     *     InstanceId?: string|null,
     *     Status?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
