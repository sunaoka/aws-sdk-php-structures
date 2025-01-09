<?php

namespace Sunaoka\Aws\Structures\QLDB\DescribeLedger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DescribeLedgerRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
