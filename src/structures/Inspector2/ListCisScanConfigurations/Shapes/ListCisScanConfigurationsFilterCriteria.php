<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CisStringFilter>|null $scanNameFilters
 * @property list<TagFilter>|null $targetResourceTagFilters
 * @property list<CisStringFilter>|null $scanConfigurationArnFilters
 */
class ListCisScanConfigurationsFilterCriteria extends Shape
{
    /**
     * @param array{
     *     scanNameFilters?: list<CisStringFilter>|null,
     *     targetResourceTagFilters?: list<TagFilter>|null,
     *     scanConfigurationArnFilters?: list<CisStringFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
