<?php

namespace Sunaoka\Aws\Structures\XRay\ListRetrievedTraces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RetrievalToken
 * @property 'XRAY'|'OTEL'|null $TraceFormat
 * @property string|null $NextToken
 */
class ListRetrievedTracesRequest extends Request
{
    /**
     * @param array{
     *     RetrievalToken: string,
     *     TraceFormat?: 'XRAY'|'OTEL'|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
