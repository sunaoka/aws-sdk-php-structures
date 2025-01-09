<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateVpcLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<string> $SecurityGroupIds
 * @property list<string> $SubnetIds
 * @property array<string, string> $Tags
 */
class CreateVpcLinkRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     SecurityGroupIds?: list<string>,
     *     SubnetIds: list<string>,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
