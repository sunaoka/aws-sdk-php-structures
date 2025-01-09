<?php

namespace Sunaoka\Aws\Structures\Omics\CancelRun;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $id
 */
class CancelRunRequest extends Request
{
    /**
     * @param array{id: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
