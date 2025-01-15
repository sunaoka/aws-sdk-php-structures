<?php

namespace Sunaoka\Aws\Structures\PrivateNetworks\StartNetworkResourceUpdate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CommitmentConfiguration|null $commitmentConfiguration
 * @property string $networkResourceArn
 * @property string|null $returnReason
 * @property Shapes\Address|null $shippingAddress
 * @property 'REPLACE'|'RETURN'|'COMMITMENT' $updateType
 */
class StartNetworkResourceUpdateRequest extends Request
{
    /**
     * @param array{
     *     commitmentConfiguration?: Shapes\CommitmentConfiguration|null,
     *     networkResourceArn: string,
     *     returnReason?: string|null,
     *     shippingAddress?: Shapes\Address|null,
     *     updateType: 'REPLACE'|'RETURN'|'COMMITMENT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
