<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateInternetGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\TagSpecification> $TagSpecifications
 * @property bool $DryRun
 */
class CreateInternetGatewayRequest extends Request
{
    /**
     * @param array{
     *     TagSpecifications?: list<Shapes\TagSpecification>,
     *     DryRun?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
