<?php

namespace Sunaoka\Aws\Structures\DataExchange\CancelJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class CancelJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
