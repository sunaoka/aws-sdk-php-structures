<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetTokenBalance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TokenIdentifier $tokenIdentifier
 * @property Shapes\OwnerIdentifier $ownerIdentifier
 * @property Shapes\BlockchainInstant $atBlockchainInstant
 */
class GetTokenBalanceRequest extends Request
{
    /**
     * @param array{
     *     tokenIdentifier: Shapes\TokenIdentifier,
     *     ownerIdentifier: Shapes\OwnerIdentifier,
     *     atBlockchainInstant?: Shapes\BlockchainInstant
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
