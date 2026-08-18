<?php

namespace Sunaoka\Aws\Structures\MarketplaceCatalog\ListAssessments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AMISecurityFilters|null $AMISecurityFilters
 * @property ContainerSecurityFilters|null $ContainerSecurityFilters
 */
class FrameworkFilters extends Shape
{
    /**
     * @param array{
     *     AMISecurityFilters?: AMISecurityFilters|null,
     *     ContainerSecurityFilters?: ContainerSecurityFilters|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
