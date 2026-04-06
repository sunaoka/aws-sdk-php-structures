<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery;

class ManagedBlockchainQueryClient extends \Aws\ManagedBlockchainQuery\ManagedBlockchainQueryClient
{
    use BatchGetTokenBalance\BatchGetTokenBalanceTrait;
    use GetTokenBalance\GetTokenBalanceTrait;
    use GetTransaction\GetTransactionTrait;
    use ListTokenBalances\ListTokenBalancesTrait;
    use ListTransactionEvents\ListTransactionEventsTrait;
    use ListTransactions\ListTransactionsTrait;
}
