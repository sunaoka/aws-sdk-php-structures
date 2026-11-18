<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\ListResourcesByConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AzureQueryScope|null $Scope
 * @property string|null $ResourceType
 * @property string|null $Region
 * @property list<TagFilter>|null $TagFilters
 */
class AzureResourceIdsQuery extends Shape
{
    /**
     * @param array{
     *     Scope?: AzureQueryScope|null,
     *     ResourceType?: string|null,
     *     Region?: string|null,
     *     TagFilters?: list<TagFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
