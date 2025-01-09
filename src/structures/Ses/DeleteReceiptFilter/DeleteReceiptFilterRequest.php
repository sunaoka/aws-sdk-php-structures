<?php

namespace Sunaoka\Aws\Structures\Ses\DeleteReceiptFilter;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $FilterName
 */
class DeleteReceiptFilterRequest extends Request
{
    /**
     * @param array{FilterName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
