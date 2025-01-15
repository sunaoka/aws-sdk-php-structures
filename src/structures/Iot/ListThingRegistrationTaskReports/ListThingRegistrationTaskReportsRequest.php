<?php

namespace Sunaoka\Aws\Structures\Iot\ListThingRegistrationTaskReports;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $taskId
 * @property 'ERRORS'|'RESULTS' $reportType
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListThingRegistrationTaskReportsRequest extends Request
{
    /**
     * @param array{
     *     taskId: string,
     *     reportType: 'ERRORS'|'RESULTS',
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
