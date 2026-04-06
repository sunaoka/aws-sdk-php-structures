<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateRouteTable;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property string $VpcId
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $ClientToken
 */
class CreateRouteTableRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     VpcId: string,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
