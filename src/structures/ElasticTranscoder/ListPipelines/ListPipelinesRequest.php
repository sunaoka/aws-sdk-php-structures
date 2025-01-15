<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListPipelines;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Ascending
 * @property string|null $PageToken
 */
class ListPipelinesRequest extends Request
{
    /**
     * @param array{
     *     Ascending?: string|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
