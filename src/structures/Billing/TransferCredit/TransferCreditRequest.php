<?php

namespace Sunaoka\Aws\Structures\Billing\TransferCredit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $creditId
 * @property string $destinationAccountId
 * @property string|null $clientToken
 * @property bool|null $dryRun
 */
class TransferCreditRequest extends Request
{
    /**
     * @param array{
     *     creditId: string,
     *     destinationAccountId: string,
     *     clientToken?: string|null,
     *     dryRun?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
