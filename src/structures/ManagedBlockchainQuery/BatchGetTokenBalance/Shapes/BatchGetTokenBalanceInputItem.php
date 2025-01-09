<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\BatchGetTokenBalance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TokenIdentifier $tokenIdentifier
 * @property OwnerIdentifier $ownerIdentifier
 * @property BlockchainInstant $atBlockchainInstant
 */
class BatchGetTokenBalanceInputItem extends Shape
{
    /**
     * @param array{
     *     tokenIdentifier: TokenIdentifier,
     *     ownerIdentifier: OwnerIdentifier,
     *     atBlockchainInstant?: BlockchainInstant
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
