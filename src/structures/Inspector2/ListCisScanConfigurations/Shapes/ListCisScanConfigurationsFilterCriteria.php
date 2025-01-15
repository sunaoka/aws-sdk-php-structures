<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListCisScanConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CisStringFilter>|null $scanConfigurationArnFilters
 * @property list<CisStringFilter>|null $scanNameFilters
 * @property list<TagFilter>|null $targetResourceTagFilters
 */
class ListCisScanConfigurationsFilterCriteria extends Shape
{
    /**
     * @param array{
     *     scanConfigurationArnFilters?: list<CisStringFilter>|null,
     *     scanNameFilters?: list<CisStringFilter>|null,
     *     targetResourceTagFilters?: list<TagFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
