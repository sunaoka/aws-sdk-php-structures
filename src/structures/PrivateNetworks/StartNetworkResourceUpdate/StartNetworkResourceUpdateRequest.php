<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\StartNetworkResourceUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CommitmentConfiguration $commitmentConfiguration
 * @property string $networkResourceArn
 * @property string $returnReason
 * @property Shapes\Address $shippingAddress
 * @property 'REPLACE'|'RETURN'|'COMMITMENT' $updateType
 */
class StartNetworkResourceUpdateRequest extends Request
{
    /**
     * @param array{
     *     commitmentConfiguration?: Shapes\CommitmentConfiguration,
     *     networkResourceArn: string,
     *     returnReason?: string,
     *     shippingAddress?: Shapes\Address,
     *     updateType: 'REPLACE'|'RETURN'|'COMMITMENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
