<?php

namespace Sunaoka\Aws\Structures\SecurityHub\ListExportJobsV2;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED'|null $Status
 * @property 'FINDINGS'|null $DataType
 * @property int<1, 20>|null $MaxResults
 * @property string|null $NextToken
 */
class ListExportJobsV2Request extends Request
{
    /**
     * @param array{
     *     Status?: 'RUNNING'|'SUCCEEDED'|'FAILED'|'CANCELLED'|null,
     *     DataType?: 'FINDINGS'|null,
     *     MaxResults?: int<1, 20>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
