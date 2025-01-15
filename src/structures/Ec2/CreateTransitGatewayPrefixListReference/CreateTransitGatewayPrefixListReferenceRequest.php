<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGatewayPrefixListReference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TransitGatewayRouteTableId
 * @property string $PrefixListId
 * @property string|null $TransitGatewayAttachmentId
 * @property bool|null $Blackhole
 * @property bool|null $DryRun
 */
class CreateTransitGatewayPrefixListReferenceRequest extends Request
{
    /**
     * @param array{
     *     TransitGatewayRouteTableId: string,
     *     PrefixListId: string,
     *     TransitGatewayAttachmentId?: string|null,
     *     Blackhole?: bool|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
