<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListPipelines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Ascending
 * @property string $PageToken
 */
class ListPipelinesRequest extends Request
{
    /**
     * @param array{
     *     Ascending?: string,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
