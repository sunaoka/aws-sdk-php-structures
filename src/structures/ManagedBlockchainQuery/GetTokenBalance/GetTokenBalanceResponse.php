<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetTokenBalance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\OwnerIdentifier|null $ownerIdentifier
 * @property Shapes\TokenIdentifier|null $tokenIdentifier
 * @property string $balance
 * @property Shapes\BlockchainInstant $atBlockchainInstant
 * @property Shapes\BlockchainInstant|null $lastUpdatedTime
 */
class GetTokenBalanceResponse extends Response
{
}
