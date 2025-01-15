<?php

namespace Sunaoka\Aws\Structures\Ec2\CreatePublicIpv4Pool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $DryRun
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property string|null $NetworkBorderGroup
 */
class CreatePublicIpv4PoolRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool|null,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     NetworkBorderGroup?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
