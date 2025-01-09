<?php

namespace Sunaoka\Aws\Structures\Ses\CreateReceiptFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\ReceiptFilter $Filter
 */
class CreateReceiptFilterRequest extends Request
{
    /**
     * @param array{Filter: Shapes\ReceiptFilter} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
