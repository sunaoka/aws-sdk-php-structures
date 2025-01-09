<?php

namespace Sunaoka\Aws\Structures\Rds\DescribeIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IntegrationIdentifier
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     IntegrationIdentifier?: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
