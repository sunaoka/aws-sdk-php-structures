<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteTransformer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupIdentifier
 */
class DeleteTransformerRequest extends Request
{
    /**
     * @param array{logGroupIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
