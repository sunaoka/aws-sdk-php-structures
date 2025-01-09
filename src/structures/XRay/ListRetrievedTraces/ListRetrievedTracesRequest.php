<?php

namespace Sunaoka\Aws\Structures\XRay\ListRetrievedTraces;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RetrievalToken
 * @property 'XRAY'|'OTEL' $TraceFormat
 * @property string $NextToken
 */
class ListRetrievedTracesRequest extends Request
{
    /**
     * @param array{
     *     RetrievalToken: string,
     *     TraceFormat?: 'XRAY'|'OTEL',
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
