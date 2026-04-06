<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery;

class ManagedBlockchainQueryClient extends \Aws\ManagedBlockchainQuery\ManagedBlockchainQueryClient
{
    use BatchGetTokenBalance\BatchGetTokenBalanceTrait;
    use GetAssetContract\GetAssetContractTrait;
    use GetTokenBalance\GetTokenBalanceTrait;
    use GetTransaction\GetTransactionTrait;
    use ListAssetContracts\ListAssetContractsTrait;
    use ListFilteredTransactionEvents\ListFilteredTransactionEventsTrait;
    use ListTokenBalances\ListTokenBalancesTrait;
    use ListTransactionEvents\ListTransactionEventsTrait;
    use ListTransactions\ListTransactionsTrait;
}
