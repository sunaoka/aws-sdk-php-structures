<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec $DefaultResourceSpec
 * @property SpaceAppLifecycleManagement $AppLifecycleManagement
 */
class SpaceCodeEditorAppSettings extends Shape
{
    /**
     * @param array{
     *     DefaultResourceSpec?: ResourceSpec,
     *     AppLifecycleManagement?: SpaceAppLifecycleManagement
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
