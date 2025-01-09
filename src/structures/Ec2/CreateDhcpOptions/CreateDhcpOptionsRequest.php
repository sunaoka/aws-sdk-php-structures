<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDhcpOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\NewDhcpConfiguration> $DhcpConfigurations
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateDhcpOptionsRequest extends Request
{
    /**
     * @param array{
     *     DhcpConfigurations: list<Shapes\NewDhcpConfiguration>,
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
