<?php

namespace Sunaoka\Aws\Structures\CloudTrail\ListImports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $Destination
 * @property 'INITIALIZING'|'IN_PROGRESS'|'FAILED'|'STOPPED'|'COMPLETED' $ImportStatus
 * @property string $NextToken
 */
class ListImportsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     Destination?: string,
     *     ImportStatus?: 'INITIALIZING'|'IN_PROGRESS'|'FAILED'|'STOPPED'|'COMPLETED',
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
