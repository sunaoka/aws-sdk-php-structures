<?php

namespace Sunaoka\Aws\Structures\Glue\DescribeInboundIntegrations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $IntegrationArn
 * @property string|null $Marker
 * @property int|null $MaxRecords
 * @property string|null $TargetArn
 */
class DescribeInboundIntegrationsRequest extends Request
{
    /**
     * @param array{
     *     IntegrationArn?: string|null,
     *     Marker?: string|null,
     *     MaxRecords?: int|null,
     *     TargetArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
