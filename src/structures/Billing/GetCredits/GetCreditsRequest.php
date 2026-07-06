<?php

namespace Sunaoka\Aws\Structures\Billing\GetCredits;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountId
 * @property \Aws\Api\DateTimeResult $startDate
 * @property \Aws\Api\DateTimeResult|null $endDate
 * @property bool|null $payerAccountFlag
 */
class GetCreditsRequest extends Request
{
    /**
     * @param array{
     *     accountId: string,
     *     startDate: \Aws\Api\DateTimeResult,
     *     endDate?: \Aws\Api\DateTimeResult|null,
     *     payerAccountFlag?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
