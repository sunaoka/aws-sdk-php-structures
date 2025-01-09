<?php

namespace Sunaoka\Aws\Structures\XRay\PutTraceSegments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $TraceSegmentDocuments
 */
class PutTraceSegmentsRequest extends Request
{
    /**
     * @param array{TraceSegmentDocuments: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
