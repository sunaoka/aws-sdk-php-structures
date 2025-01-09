<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\GetTableRestoreStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tableRestoreRequestId
 */
class GetTableRestoreStatusRequest extends Request
{
    /**
     * @param array{tableRestoreRequestId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
