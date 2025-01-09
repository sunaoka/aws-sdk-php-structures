<?php

namespace Sunaoka\Aws\Structures\BillingConductor\DisassociateAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property list<string> $AccountIds
 */
class DisassociateAccountsRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     AccountIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
