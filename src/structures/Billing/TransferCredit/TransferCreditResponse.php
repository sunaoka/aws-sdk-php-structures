<?php

namespace Sunaoka\Aws\Structures\Billing\TransferCredit;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $sourceCreditId
 * @property string|null $newCreditId
 * @property string $destinationAccountId
 * @property string $amount
 * @property bool $dryRun
 */
class TransferCreditResponse extends Response
{
}
