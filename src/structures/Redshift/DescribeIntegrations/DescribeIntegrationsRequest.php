<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $IntegrationArn
 * @property int|null $MaxRecords
 * @property string|null $Marker
 * @property list<Shapes\DescribeIntegrationsFilter>|null $Filters
 */
class DescribeIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     IntegrationArn?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null,
     *     Filters?: list<Shapes\DescribeIntegrationsFilter>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
