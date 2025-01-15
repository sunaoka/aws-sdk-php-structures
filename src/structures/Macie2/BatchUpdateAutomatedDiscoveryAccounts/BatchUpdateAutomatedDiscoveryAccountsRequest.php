<?php

namespace Sunaoka\Aws\Structures\Macie2\BatchUpdateAutomatedDiscoveryAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\AutomatedDiscoveryAccountUpdate>|null $accounts
 */
class BatchUpdateAutomatedDiscoveryAccountsRequest extends Request
{
    /**
     * @param array{accounts?: list<Shapes\AutomatedDiscoveryAccountUpdate>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
