<?php

namespace Sunaoka\Aws\Structures\RTBFabric\CreateRequesterGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property list<string> $securityGroupIds
 * @property string $clientToken
 * @property string|null $description
 * @property array<string, string>|null $tags
 */
class CreateRequesterGatewayRequest extends Request
{
    /**
     * @param array{
     *     vpcId: string,
     *     subnetIds: list<string>,
     *     securityGroupIds: list<string>,
     *     clientToken: string,
     *     description?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
