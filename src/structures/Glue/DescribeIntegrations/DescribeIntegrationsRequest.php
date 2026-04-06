<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $IntegrationIdentifier
 * @property string|null $Marker
 * @property int|null $MaxRecords
 * @property list<Shapes\IntegrationFilter>|null $Filters
 */
class DescribeIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     IntegrationIdentifier?: string|null,
     *     Marker?: string|null,
     *     MaxRecords?: int|null,
     *     Filters?: list<Shapes\IntegrationFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
