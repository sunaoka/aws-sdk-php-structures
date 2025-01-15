<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DestinationPath
 * @property ResourceDownloadOwnerSetting|null $OwnerSetting
 * @property string|null $SageMakerJobArn
 */
class SageMakerMachineLearningModelResourceData extends Shape
{
    /**
     * @param array{
     *     DestinationPath?: string|null,
     *     OwnerSetting?: ResourceDownloadOwnerSetting|null,
     *     SageMakerJobArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
