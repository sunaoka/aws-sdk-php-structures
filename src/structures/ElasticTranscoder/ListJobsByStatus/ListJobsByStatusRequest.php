<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Status
 * @property string $Ascending
 * @property string $PageToken
 */
class ListJobsByStatusRequest extends Request
{
    /**
     * @param array{
     *     Status: string,
     *     Ascending?: string,
     *     PageToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
