<?php

namespace Sunaoka\Aws\Structures\Ec2\AttachImageWatermark;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property string $WatermarkName
 * @property bool|null $DryRun
 */
class AttachImageWatermarkRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     WatermarkName: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
