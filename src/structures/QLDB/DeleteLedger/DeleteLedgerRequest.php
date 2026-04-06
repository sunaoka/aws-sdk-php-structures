<?php

namespace Sunaoka\Aws\Structures\QLDB\DeleteLedger;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 */
class DeleteLedgerRequest extends Request
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
