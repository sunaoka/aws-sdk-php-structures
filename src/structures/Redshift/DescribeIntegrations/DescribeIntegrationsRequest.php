<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IntegrationArn
 * @property int $MaxRecords
 * @property string $Marker
 * @property list<Shapes\DescribeIntegrationsFilter> $Filters
 */
class DescribeIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     IntegrationArn?: string,
     *     MaxRecords?: int,
     *     Marker?: string,
     *     Filters?: list<Shapes\DescribeIntegrationsFilter>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
