<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateCustomRoutingAcceleratorAttributes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AcceleratorArn
 * @property bool|null $FlowLogsEnabled
 * @property string|null $FlowLogsS3Bucket
 * @property string|null $FlowLogsS3Prefix
 */
class UpdateCustomRoutingAcceleratorAttributesRequest extends Request
{
    /**
     * @param array{
     *     AcceleratorArn: string,
     *     FlowLogsEnabled?: bool|null,
     *     FlowLogsS3Bucket?: string|null,
     *     FlowLogsS3Prefix?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
