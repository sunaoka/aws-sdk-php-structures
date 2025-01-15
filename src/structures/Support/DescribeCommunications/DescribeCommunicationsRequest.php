<?php

namespace Sunaoka\Aws\Structures\Support\DescribeCommunications;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $caseId
 * @property string|null $beforeTime
 * @property string|null $afterTime
 * @property string|null $nextToken
 * @property int<10, 100>|null $maxResults
 */
class DescribeCommunicationsRequest extends Request
{
    /**
     * @param array{
     *     caseId: string,
     *     beforeTime?: string|null,
     *     afterTime?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<10, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
