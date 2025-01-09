<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayPrefixListReference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableId
 * @property string $PrefixListId
 * @property string $TransitGatewayAttachmentId
 * @property bool $Blackhole
 * @property bool $DryRun
 */
class CreateTransitGatewayPrefixListReferenceRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId: string,
     *     PrefixListId: string,
     *     TransitGatewayAttachmentId?: string,
     *     Blackhole?: bool,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
