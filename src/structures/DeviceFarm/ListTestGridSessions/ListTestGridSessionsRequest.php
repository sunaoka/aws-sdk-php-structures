<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListTestGridSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectArn
 * @property 'ACTIVE'|'CLOSED'|'ERRORED' $status
 * @property \Aws\Api\DateTimeResult $creationTimeAfter
 * @property \Aws\Api\DateTimeResult $creationTimeBefore
 * @property \Aws\Api\DateTimeResult $endTimeAfter
 * @property \Aws\Api\DateTimeResult $endTimeBefore
 * @property int $maxResult
 * @property string $nextToken
 */
class ListTestGridSessionsRequest extends Request
{
    /**
     * @param array{
     *     projectArn: string,
     *     status?: 'ACTIVE'|'CLOSED'|'ERRORED',
     *     creationTimeAfter?: \Aws\Api\DateTimeResult,
     *     creationTimeBefore?: \Aws\Api\DateTimeResult,
     *     endTimeAfter?: \Aws\Api\DateTimeResult,
     *     endTimeBefore?: \Aws\Api\DateTimeResult,
     *     maxResult?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
