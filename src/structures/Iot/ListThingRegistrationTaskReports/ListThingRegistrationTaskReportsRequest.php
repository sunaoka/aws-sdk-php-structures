<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingRegistrationTaskReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 * @property 'ERRORS'|'RESULTS' $reportType
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListThingRegistrationTaskReportsRequest extends Request
{
    /**
     * @param array{
     *     taskId: string,
     *     reportType: 'ERRORS'|'RESULTS',
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
