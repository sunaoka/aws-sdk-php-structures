<?php

namespace Sunaoka\Aws\Structures\Ec2\GetTransitGatewayPrefixListReferences;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableId
 * @property list<Shapes\Filter> $Filters
 * @property int $MaxResults
 * @property string $NextToken
 * @property bool $DryRun
 */
class GetTransitGatewayPrefixListReferencesRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId: string,
     *     Filters?: list<Shapes\Filter>,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
