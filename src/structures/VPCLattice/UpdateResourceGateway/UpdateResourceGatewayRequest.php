<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateResourceGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceGatewayIdentifier
 * @property list<string>|null $securityGroupIds
 */
class UpdateResourceGatewayRequest extends Request
{
    /**
     * @param array{
     *     resourceGatewayIdentifier: string,
     *     securityGroupIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
