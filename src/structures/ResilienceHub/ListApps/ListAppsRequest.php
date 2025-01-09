<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $awsApplicationArn
 * @property \Aws\Api\DateTimeResult $fromLastAssessmentTime
 * @property int $maxResults
 * @property string $name
 * @property string $nextToken
 * @property bool $reverseOrder
 * @property \Aws\Api\DateTimeResult $toLastAssessmentTime
 */
class ListAppsRequest extends Request
{
    /**
     * @param array{
     *     appArn?: string,
     *     awsApplicationArn?: string,
     *     fromLastAssessmentTime?: \Aws\Api\DateTimeResult,
     *     maxResults?: int,
     *     name?: string,
     *     nextToken?: string,
     *     reverseOrder?: bool,
     *     toLastAssessmentTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
