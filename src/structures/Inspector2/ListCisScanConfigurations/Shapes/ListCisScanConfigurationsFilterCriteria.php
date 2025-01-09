<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CisStringFilter> $scanConfigurationArnFilters
 * @property list<CisStringFilter> $scanNameFilters
 * @property list<TagFilter> $targetResourceTagFilters
 */
class ListCisScanConfigurationsFilterCriteria extends Shape
{
    /**
     * @param array{
     *     scanConfigurationArnFilters?: list<CisStringFilter>,
     *     scanNameFilters?: list<CisStringFilter>,
     *     targetResourceTagFilters?: list<TagFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
