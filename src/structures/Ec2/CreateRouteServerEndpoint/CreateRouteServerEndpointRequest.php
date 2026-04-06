<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRouteServerEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RouteServerId
 * @property string $SubnetId
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateRouteServerEndpointRequest extends Request
{
    /**
     * @param array{
     *     RouteServerId: string,
     *     SubnetId: string,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
