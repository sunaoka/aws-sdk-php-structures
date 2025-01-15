<?php

namespace Sunaoka\Aws\Structures\AppRunner\CreateVpcConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VpcConnectorName
 * @property list<string> $Subnets
 * @property list<string>|null $SecurityGroups
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateVpcConnectorRequest extends Request
{
    /**
     * @param array{
     *     VpcConnectorName: string,
     *     Subnets: list<string>,
     *     SecurityGroups?: list<string>|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
