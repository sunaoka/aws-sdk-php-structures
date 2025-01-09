<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateVpcConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcConnectorName
 * @property list<string> $Subnets
 * @property list<string> $SecurityGroups
 * @property list<Shapes\Tag> $Tags
 */
class CreateVpcConnectorRequest extends Request
{
    /**
     * @param array{
     *     VpcConnectorName: string,
     *     Subnets: list<string>,
     *     SecurityGroups?: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
