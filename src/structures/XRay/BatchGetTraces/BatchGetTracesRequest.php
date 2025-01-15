<?php

namespace Sunaoka\Aws\Structures\XRay\BatchGetTraces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TraceIds
 * @property string|null $NextToken
 */
class BatchGetTracesRequest extends Request
{
    /**
     * @param array{
     *     TraceIds: list<string>,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
