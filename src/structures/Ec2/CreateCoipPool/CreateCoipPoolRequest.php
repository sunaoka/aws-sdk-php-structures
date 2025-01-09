<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateCoipPool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LocalGatewayRouteTableId
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateCoipPoolRequest extends Request
{
    /**
     * @param array{
     *     LocalGatewayRouteTableId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
