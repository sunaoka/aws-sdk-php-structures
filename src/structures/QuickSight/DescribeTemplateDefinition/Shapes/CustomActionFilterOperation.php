<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property FilterOperationSelectedFieldsConfiguration $SelectedFieldsConfiguration
 * @property FilterOperationTargetVisualsConfiguration $TargetVisualsConfiguration
 */
class CustomActionFilterOperation extends Shape
{
    /**
     * @param array{
     *     SelectedFieldsConfiguration: FilterOperationSelectedFieldsConfiguration,
     *     TargetVisualsConfiguration: FilterOperationTargetVisualsConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
