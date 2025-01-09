<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IntegrationIdentifier
 * @property string $Marker
 * @property int $MaxRecords
 * @property list<Shapes\IntegrationFilter> $Filters
 */
class DescribeIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     IntegrationIdentifier?: string,
     *     Marker?: string,
     *     MaxRecords?: int,
     *     Filters?: list<Shapes\IntegrationFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
