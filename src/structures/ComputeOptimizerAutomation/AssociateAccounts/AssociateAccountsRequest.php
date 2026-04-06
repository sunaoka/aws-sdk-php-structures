<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\AssociateAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property string|null $clientToken
 */
class AssociateAccountsRequest extends Request
{
    /**
     * @param array{
     *     accountIds: list<string>,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
