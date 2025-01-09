<?php

namespace Sunaoka\Aws\Structures\Proton\GetResourcesSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceCountsSummary $components
 * @property ResourceCountsSummary $environmentTemplates
 * @property ResourceCountsSummary $environments
 * @property ResourceCountsSummary $pipelines
 * @property ResourceCountsSummary $serviceInstances
 * @property ResourceCountsSummary $serviceTemplates
 * @property ResourceCountsSummary $services
 */
class CountsSummary extends Shape
{
    /**
     * @param array{
     *     components?: ResourceCountsSummary,
     *     environmentTemplates?: ResourceCountsSummary,
     *     environments?: ResourceCountsSummary,
     *     pipelines?: ResourceCountsSummary,
     *     serviceInstances?: ResourceCountsSummary,
     *     serviceTemplates?: ResourceCountsSummary,
     *     services?: ResourceCountsSummary
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
