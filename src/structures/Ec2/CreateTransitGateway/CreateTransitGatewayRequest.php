<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateTransitGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Description
 * @property Shapes\TransitGatewayRequestOptions $Options
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateTransitGatewayRequest extends Request
{
    /**
     * @param array{
     *     Description?: string,
     *     Options?: Shapes\TransitGatewayRequestOptions,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
