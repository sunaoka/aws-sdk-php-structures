<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\DescribeAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AMISecuritySummary|null $AMISecuritySummary
 * @property ContainerSecuritySummary|null $ContainerSecuritySummary
 */
class FrameworkSummary extends Shape
{
    /**
     * @param array{
     *     AMISecuritySummary?: AMISecuritySummary|null,
     *     ContainerSecuritySummary?: ContainerSecuritySummary|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
