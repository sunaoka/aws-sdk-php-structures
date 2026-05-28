<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListServiceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $serviceFunctionId
 * @property string|null $serviceFunctionName
 */
class ServiceWorkflowUpdatedMetadata extends Shape
{
    /**
     * @param array{
     *     serviceFunctionId?: string|null,
     *     serviceFunctionName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
