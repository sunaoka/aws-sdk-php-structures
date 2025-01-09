<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchainQuery\BatchGetTokenBalance;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\BatchGetTokenBalanceInputItem> $getTokenBalanceInputs
 */
class BatchGetTokenBalanceRequest extends Request
{
    /**
     * @param array{getTokenBalanceInputs?: list<Shapes\BatchGetTokenBalanceInputItem>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
