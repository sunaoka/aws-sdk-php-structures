<?php

namespace Sunaoka\Aws\Structures\Proton\GetResourcesSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ResourceCountsSummary|null $components
 * @property ResourceCountsSummary|null $environmentTemplates
 * @property ResourceCountsSummary|null $environments
 * @property ResourceCountsSummary|null $pipelines
 * @property ResourceCountsSummary|null $serviceInstances
 * @property ResourceCountsSummary|null $serviceTemplates
 * @property ResourceCountsSummary|null $services
 */
class CountsSummary extends Shape
{
    /**
     * @param array{
     *     components?: ResourceCountsSummary|null,
     *     environmentTemplates?: ResourceCountsSummary|null,
     *     environments?: ResourceCountsSummary|null,
     *     pipelines?: ResourceCountsSummary|null,
     *     serviceInstances?: ResourceCountsSummary|null,
     *     serviceTemplates?: ResourceCountsSummary|null,
     *     services?: ResourceCountsSummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
