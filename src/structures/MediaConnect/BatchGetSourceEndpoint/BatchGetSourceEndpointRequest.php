<?php

namespace Sunaoka\Aws\Structures\MediaConnect\BatchGetSourceEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $Arns
 */
class BatchGetSourceEndpointRequest extends Request
{
    /**
     * @param array{Arns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
