<?php

namespace Sunaoka\Aws\Structures\Ec2\DetachImageWatermark;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ImageId
 * @property string $WatermarkKey
 * @property bool|null $DryRun
 */
class DetachImageWatermarkRequest extends Request
{
    /**
     * @param array{
     *     ImageId: string,
     *     WatermarkKey: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
