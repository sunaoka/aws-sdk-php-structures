<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property 'ACTIVE'|'CLOSED'|'ERRORED'|null $status
 * @property \Aws\Api\DateTimeResult|null $creationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $creationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $endTimeAfter
 * @property \Aws\Api\DateTimeResult|null $endTimeBefore
 * @property int<1, 1000>|null $maxResult
 * @property string|null $nextToken
 */
class ListTestGridSessionsRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     status?: 'ACTIVE'|'CLOSED'|'ERRORED'|null,
     *     creationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     creationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     endTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     endTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     maxResult?: int<1, 1000>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
