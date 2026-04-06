<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanName
 * @property string|null $nextToken
 * @property int<1, 1000>|null $maxResults
 * @property 'Closed'|'Open'|'All'|null $status
 */
class GetFindingsRequest extends Request
{
    /**
     * @param array{
     *     scanName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 1000>|null,
     *     status?: 'Closed'|'Open'|'All'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
