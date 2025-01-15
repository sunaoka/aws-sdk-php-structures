<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeInboundIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $IntegrationArn
 * @property string|null $TargetArn
 * @property int|null $MaxRecords
 * @property string|null $Marker
 */
class DescribeInboundIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     IntegrationArn?: string|null,
     *     TargetArn?: string|null,
     *     MaxRecords?: int|null,
     *     Marker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
