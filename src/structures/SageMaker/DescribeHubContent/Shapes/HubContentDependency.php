<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHubContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DependencyOriginPath
 * @property string $DependencyCopyPath
 */
class HubContentDependency extends Shape
{
    /**
     * @param array{
     *     DependencyOriginPath?: string,
     *     DependencyCopyPath?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
