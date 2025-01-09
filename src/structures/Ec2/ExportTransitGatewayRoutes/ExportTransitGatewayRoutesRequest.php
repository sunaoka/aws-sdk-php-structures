<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportTransitGatewayRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableId
 * @property list<Shapes\Filter> $Filters
 * @property string $S3Bucket
 * @property bool $DryRun
 */
class ExportTransitGatewayRoutesRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId: string,
     *     Filters?: list<Shapes\Filter>,
     *     S3Bucket: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
