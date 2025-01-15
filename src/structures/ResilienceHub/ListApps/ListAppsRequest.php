<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListApps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $appArn
 * @property string|null $awsApplicationArn
 * @property \Aws\Api\DateTimeResult|null $fromLastAssessmentTime
 * @property int<1, 100>|null $maxResults
 * @property string|null $name
 * @property string|null $nextToken
 * @property bool|null $reverseOrder
 * @property \Aws\Api\DateTimeResult|null $toLastAssessmentTime
 */
class ListAppsRequest extends Request
{
    /**
     * @param array{
     *     appArn?: string|null,
     *     awsApplicationArn?: string|null,
     *     fromLastAssessmentTime?: \Aws\Api\DateTimeResult|null,
     *     maxResults?: int<1, 100>|null,
     *     name?: string|null,
     *     nextToken?: string|null,
     *     reverseOrder?: bool|null,
     *     toLastAssessmentTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
