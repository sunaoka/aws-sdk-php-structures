<?php

namespace Sunaoka\Aws\Structures\Glue\ListIntegrationResourceProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property list<Shapes\IntegrationResourcePropertyFilter>|null $Filters
 * @property int|null $MaxRecords
 */
class ListIntegrationResourcePropertiesRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     Filters?: list<Shapes\IntegrationResourcePropertyFilter>|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
