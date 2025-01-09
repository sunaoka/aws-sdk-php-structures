<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class GetJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
