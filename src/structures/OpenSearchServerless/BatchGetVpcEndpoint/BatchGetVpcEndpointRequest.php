<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\BatchGetVpcEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ids
 */
class BatchGetVpcEndpointRequest extends Request
{
    /**
     * @param array{ids: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
