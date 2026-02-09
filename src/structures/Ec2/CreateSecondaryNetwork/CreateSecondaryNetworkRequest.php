<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSecondaryNetwork;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property bool|null $DryRun
 * @property string $Ipv4CidrBlock
 * @property 'rdma' $NetworkType
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 */
class CreateSecondaryNetworkRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     DryRun?: bool|null,
     *     Ipv4CidrBlock: string,
     *     NetworkType: 'rdma',
     *     TagSpecifications?: list<Shapes\TagSpecification>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
