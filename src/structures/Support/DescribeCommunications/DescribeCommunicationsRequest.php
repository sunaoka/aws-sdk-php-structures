<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCommunications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string $beforeTime
 * @property string $afterTime
 * @property string $nextToken
 * @property int $maxResults
 */
class DescribeCommunicationsRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     beforeTime?: string,
     *     afterTime?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
