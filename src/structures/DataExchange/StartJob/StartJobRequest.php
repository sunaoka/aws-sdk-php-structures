<?php

namespace Sunaoka\Aws\Structures\DataExchange\StartJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $JobId
 */
class StartJobRequest extends Request
{
    /**
     * @param array{JobId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
