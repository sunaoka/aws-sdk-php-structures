<?php

namespace Sunaoka\Aws\Structures\TimestreamQuery\CancelQuery;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $QueryId
 */
class CancelQueryRequest extends Request
{
    /**
     * @param array{QueryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
