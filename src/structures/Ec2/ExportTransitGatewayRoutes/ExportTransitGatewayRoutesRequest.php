<?php

namespace Sunaoka\Aws\Structures\Ec2\ExportTransitGatewayRoutes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableId
 * @property list<Shapes\Filter>|null $Filters
 * @property string $S3Bucket
 * @property bool|null $DryRun
 */
class ExportTransitGatewayRoutesRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId: string,
     *     Filters?: list<Shapes\Filter>|null,
     *     S3Bucket: string,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
