<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHubContent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DependencyOriginPath
 * @property string|null $DependencyCopyPath
 */
class HubContentDependency extends Shape
{
    /**
     * @param array{
     *     DependencyOriginPath?: string|null,
     *     DependencyCopyPath?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
