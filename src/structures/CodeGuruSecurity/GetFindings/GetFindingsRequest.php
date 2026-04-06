<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $scanName
 * @property 'Closed'|'Open'|'All'|null $status
 */
class GetFindingsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     scanName: string,
     *     status?: 'Closed'|'Open'|'All'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
