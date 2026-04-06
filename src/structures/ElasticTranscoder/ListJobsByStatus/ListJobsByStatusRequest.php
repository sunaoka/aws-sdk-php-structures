<?php

namespace Sunaoka\Aws\Structures\ElasticTranscoder\ListJobsByStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Status
 * @property string|null $Ascending
 * @property string|null $PageToken
 */
class ListJobsByStatusRequest extends Request
{
    /**
     * @param array{
     *     Status: string,
     *     Ascending?: string|null,
     *     PageToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
