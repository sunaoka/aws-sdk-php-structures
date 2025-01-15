<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\CreateVpcLink;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<string>|null $SecurityGroupIds
 * @property list<string> $SubnetIds
 * @property array<string, string>|null $Tags
 */
class CreateVpcLinkRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     SecurityGroupIds?: list<string>|null,
     *     SubnetIds: list<string>,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
