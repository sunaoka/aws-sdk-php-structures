<?php

namespace Sunaoka\Aws\Structures\Macie2\BatchUpdateAutomatedDiscoveryAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AutomatedDiscoveryAccountUpdate> $accounts
 */
class BatchUpdateAutomatedDiscoveryAccountsRequest extends Request
{
    /**
     * @param array{accounts?: list<Shapes\AutomatedDiscoveryAccountUpdate>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
