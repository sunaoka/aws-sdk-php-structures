<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTokenBalances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OwnerIdentifier $ownerIdentifier
 * @property TokenIdentifier $tokenIdentifier
 * @property string $balance
 * @property BlockchainInstant $atBlockchainInstant
 * @property BlockchainInstant $lastUpdatedTime
 */
class TokenBalance extends Shape
{
    /**
     * @param array{
     *     ownerIdentifier?: OwnerIdentifier,
     *     tokenIdentifier?: TokenIdentifier,
     *     balance: string,
     *     atBlockchainInstant: BlockchainInstant,
     *     lastUpdatedTime?: BlockchainInstant
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
