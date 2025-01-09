<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationPath
 * @property ResourceDownloadOwnerSetting $OwnerSetting
 * @property string $S3Uri
 */
class S3MachineLearningModelResourceData extends Shape
{
    /**
     * @param array{
     *     DestinationPath?: string,
     *     OwnerSetting?: ResourceDownloadOwnerSetting,
     *     S3Uri?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
