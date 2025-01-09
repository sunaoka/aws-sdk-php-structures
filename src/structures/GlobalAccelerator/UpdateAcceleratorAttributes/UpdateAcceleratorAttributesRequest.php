<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateAcceleratorAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 * @property bool $FlowLogsEnabled
 * @property string $FlowLogsS3Bucket
 * @property string $FlowLogsS3Prefix
 */
class UpdateAcceleratorAttributesRequest extends Request
{
    /**
     * @param array{
     *     AcceleratorArn: string,
     *     FlowLogsEnabled?: bool,
     *     FlowLogsS3Bucket?: string,
     *     FlowLogsS3Prefix?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
