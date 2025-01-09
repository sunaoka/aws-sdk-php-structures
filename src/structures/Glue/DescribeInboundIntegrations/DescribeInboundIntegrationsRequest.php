<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeInboundIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IntegrationArn
 * @property string $Marker
 * @property int $MaxRecords
 * @property string $TargetArn
 */
class DescribeInboundIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     IntegrationArn?: string,
     *     Marker?: string,
     *     MaxRecords?: int,
     *     TargetArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
