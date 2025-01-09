<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DestinationPath
 * @property ResourceDownloadOwnerSetting $OwnerSetting
 * @property string $SageMakerJobArn
 */
class SageMakerMachineLearningModelResourceData extends Shape
{
    /**
     * @param array{
     *     DestinationPath?: string,
     *     OwnerSetting?: ResourceDownloadOwnerSetting,
     *     SageMakerJobArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
