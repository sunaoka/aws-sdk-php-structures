<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListOfferingTransactions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 */
class ListOfferingTransactionsRequest extends Request
{
    /**
     * @param array{nextToken?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
