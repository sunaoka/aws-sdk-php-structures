<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListOfferingTransactions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 */
class ListOfferingTransactionsRequest extends Request
{
    /**
     * @param array{nextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
