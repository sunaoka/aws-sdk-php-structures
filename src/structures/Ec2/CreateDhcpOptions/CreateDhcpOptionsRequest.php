<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateDhcpOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\NewDhcpConfiguration> $DhcpConfigurations
 * @property list<Shapes\TagSpecification>|null $TagSpecifications
 * @property bool|null $DryRun
 */
class CreateDhcpOptionsRequest extends Request
{
    /**
     * @param array{
     *     DhcpConfigurations: list<Shapes\NewDhcpConfiguration>,
     *     TagSpecifications?: list<Shapes\TagSpecification>|null,
     *     DryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
