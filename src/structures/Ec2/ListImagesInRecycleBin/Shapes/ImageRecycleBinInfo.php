<?php

namespace Sunaoka\Aws\Structures\Ec2\ListImagesInRecycleBin\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ImageId
 * @property string|null $Name
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $RecycleBinEnterTime
 * @property \Aws\Api\DateTimeResult|null $RecycleBinExitTime
 */
class ImageRecycleBinInfo extends Shape
{
    /**
     * @param array{
     *     ImageId?: string|null,
     *     Name?: string|null,
     *     Description?: string|null,
     *     RecycleBinEnterTime?: \Aws\Api\DateTimeResult|null,
     *     RecycleBinExitTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
