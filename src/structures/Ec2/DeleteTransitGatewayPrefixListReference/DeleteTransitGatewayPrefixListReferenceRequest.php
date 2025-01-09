<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteTransitGatewayPrefixListReference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableId
 * @property string $PrefixListId
 * @property bool $DryRun
 */
class DeleteTransitGatewayPrefixListReferenceRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId: string,
     *     PrefixListId: string,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
