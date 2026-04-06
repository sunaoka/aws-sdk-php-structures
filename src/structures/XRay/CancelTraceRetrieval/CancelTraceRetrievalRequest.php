<?php

namespace Sunaoka\Aws\Structures\XRay\CancelTraceRetrieval;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RetrievalToken
 */
class CancelTraceRetrievalRequest extends Request
{
    /**
     * @param array{RetrievalToken: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
