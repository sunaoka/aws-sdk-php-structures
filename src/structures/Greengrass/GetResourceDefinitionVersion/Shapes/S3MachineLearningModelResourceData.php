<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetResourceDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationPath
 * @property ResourceDownloadOwnerSetting|null $OwnerSetting
 * @property string|null $S3Uri
 */
class S3MachineLearningModelResourceData extends Shape
{
    /**
     * @param array{
     *     DestinationPath?: string|null,
     *     OwnerSetting?: ResourceDownloadOwnerSetting|null,
     *     S3Uri?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
