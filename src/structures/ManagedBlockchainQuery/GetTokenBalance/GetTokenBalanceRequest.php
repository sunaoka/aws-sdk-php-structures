<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetTokenBalance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\TokenIdentifier $tokenIdentifier
 * @property Shapes\OwnerIdentifier $ownerIdentifier
 * @property Shapes\BlockchainInstant|null $atBlockchainInstant
 */
class GetTokenBalanceRequest extends Request
{
    /**
     * @param array{
     *     tokenIdentifier: Shapes\TokenIdentifier,
     *     ownerIdentifier: Shapes\OwnerIdentifier,
     *     atBlockchainInstant?: Shapes\BlockchainInstant|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
