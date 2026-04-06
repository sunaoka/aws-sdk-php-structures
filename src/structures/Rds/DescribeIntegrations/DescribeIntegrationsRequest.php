<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $IntegrationIdentifier
 * @property list<Shapes\Filter>|null $Filters
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     IntegrationIdentifier?: string|null,
     *     Filters?: list<Shapes\Filter>|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
