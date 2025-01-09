<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 1000> $maxResults
 * @property string $nextToken
 * @property string $scanName
 * @property 'Closed'|'Open'|'All' $status
 */
class GetFindingsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 1000>,
     *     nextToken?: string,
     *     scanName: string,
     *     status?: 'Closed'|'Open'|'All'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
