<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property string $VpcId
 */
class CreateRouteTableRequest extends Request
{
    /**
     * @param array{
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     VpcId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
