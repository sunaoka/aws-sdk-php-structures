<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceSpec|null $DefaultResourceSpec
 * @property SpaceAppLifecycleManagement|null $AppLifecycleManagement
 */
class SpaceCodeEditorAppSettings extends Shape
{
    /**
     * @param array{
     *     DefaultResourceSpec?: ResourceSpec|null,
     *     AppLifecycleManagement?: SpaceAppLifecycleManagement|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
