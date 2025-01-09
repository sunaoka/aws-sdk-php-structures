<?php

namespace Sunaoka\Aws\Structures\Ec2\ListImagesInRecycleBin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ImageId
 * @property string $Name
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $RecycleBinEnterTime
 * @property \Aws\Api\DateTimeResult $RecycleBinExitTime
 */
class ImageRecycleBinInfo extends Shape
{
    /**
     * @param array{
     *     ImageId?: string,
     *     Name?: string,
     *     Description?: string,
     *     RecycleBinEnterTime?: \Aws\Api\DateTimeResult,
     *     RecycleBinExitTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
