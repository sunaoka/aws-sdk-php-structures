<?php

namespace Sunaoka\Aws\Structures\Ec2\CreatePublicIpv4Pool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $DryRun
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property string $NetworkBorderGroup
 */
class CreatePublicIpv4PoolRequest extends Request
{
    /**
     * @param array{
     *     DryRun?: bool,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     NetworkBorderGroup?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
