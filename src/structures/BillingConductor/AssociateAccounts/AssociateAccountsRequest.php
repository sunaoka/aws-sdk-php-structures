<?php

namespace Sunaoka\Aws\Structures\BillingConductor\AssociateAccounts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property list<string> $AccountIds
 */
class AssociateAccountsRequest extends Request
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
