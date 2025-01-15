<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\ListTokenBalances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property OwnerIdentifier|null $ownerIdentifier
 * @property TokenIdentifier|null $tokenIdentifier
 * @property string $balance
 * @property BlockchainInstant $atBlockchainInstant
 * @property BlockchainInstant|null $lastUpdatedTime
 */
class TokenBalance extends Shape
{
    /**
     * @param array{
     *     ownerIdentifier?: OwnerIdentifier|null,
     *     tokenIdentifier?: TokenIdentifier|null,
     *     balance: string,
     *     atBlockchainInstant: BlockchainInstant,
     *     lastUpdatedTime?: BlockchainInstant|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
