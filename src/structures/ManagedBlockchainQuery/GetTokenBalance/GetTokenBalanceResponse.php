<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\GetTokenBalance;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\OwnerIdentifier $ownerIdentifier
 * @property Shapes\TokenIdentifier $tokenIdentifier
 * @property string $balance
 * @property Shapes\BlockchainInstant $atBlockchainInstant
 * @property Shapes\BlockchainInstant $lastUpdatedTime
 */
class GetTokenBalanceResponse extends Response
{
}
