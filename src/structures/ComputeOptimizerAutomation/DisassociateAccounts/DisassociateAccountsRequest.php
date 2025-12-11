<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\DisassociateAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 * @property string|null $clientToken
 */
class DisassociateAccountsRequest extends Request
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
