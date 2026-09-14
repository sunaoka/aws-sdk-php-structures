<?php

namespace Sunaoka\Aws\Structures\Glue\ListIntegrationTableProperties;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Marker
 * @property list<Shapes\IntegrationTablePropertiesFilter>|null $Filters
 * @property int|null $MaxRecords
 */
class ListIntegrationTablePropertiesRequest extends Request
{
    /**
     * @param array{
     *     Marker?: string|null,
     *     Filters?: list<Shapes\IntegrationTablePropertiesFilter>|null,
     *     MaxRecords?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
