<?php

namespace Sunaoka\Aws\Structures\CleanRooms\ListAnalysisLogExports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $membershipIdentifier
 * @property string|null $analysisIdentifier
 * @property 'IN_PROGRESS'|'SUCCESS'|'FAILED'|null $status
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListAnalysisLogExportsRequest extends Request
{
    /**
     * @param array{
     *     membershipIdentifier: string,
     *     analysisIdentifier?: string|null,
     *     status?: 'IN_PROGRESS'|'SUCCESS'|'FAILED'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
