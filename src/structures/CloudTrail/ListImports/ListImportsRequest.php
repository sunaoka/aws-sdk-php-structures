<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListImports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000>|null $MaxResults
 * @property string|null $Destination
 * @property 'INITIALIZING'|'IN_PROGRESS'|'FAILED'|'STOPPED'|'COMPLETED'|null $ImportStatus
 * @property string|null $NextToken
 */
class ListImportsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 1000>|null,
     *     Destination?: string|null,
     *     ImportStatus?: 'INITIALIZING'|'IN_PROGRESS'|'FAILED'|'STOPPED'|'COMPLETED'|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
