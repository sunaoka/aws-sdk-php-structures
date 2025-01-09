<?php

namespace Sunaoka\Aws\Structures\Glue\BatchGetDevEndpoints;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $DevEndpointNames
 */
class BatchGetDevEndpointsRequest extends Request
{
    /**
     * @param array{DevEndpointNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
