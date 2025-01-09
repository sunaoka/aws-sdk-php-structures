<?php

namespace Sunaoka\Aws\Structures\XRay\GetRetrievedTracesGraph;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RetrievalToken
 * @property string $NextToken
 */
class GetRetrievedTracesGraphRequest extends Request
{
    /**
     * @param array{
     *     RetrievalToken: string,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
