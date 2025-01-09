<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeInboundIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IntegrationArn
 * @property string $TargetArn
 * @property int $MaxRecords
 * @property string $Marker
 */
class DescribeInboundIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     IntegrationArn?: string,
     *     TargetArn?: string,
     *     MaxRecords?: int,
     *     Marker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
