<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AttachTime
 * @property bool $DeleteOnTermination
 * @property string $InstanceId
 * @property string $Status
 */
class AwsEc2VolumeAttachment extends Shape
{
    /**
     * @param array{
     *     AttachTime?: string,
     *     DeleteOnTermination?: bool,
     *     InstanceId?: string,
     *     Status?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
