<?php

namespace Sunaoka\Aws\Structures\Iot\ListViolationEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string $thingName
 * @property string $securityProfileName
 * @property 'STATIC'|'STATISTICAL'|'MACHINE_LEARNING' $behaviorCriteriaType
 * @property bool $listSuppressedAlerts
 * @property 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN' $verificationState
 * @property string $nextToken
 * @property int $maxResults
 */
class ListViolationEventsRequest extends Request
{
    /**
     * @param array{
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     thingName?: string,
     *     securityProfileName?: string,
     *     behaviorCriteriaType?: 'STATIC'|'STATISTICAL'|'MACHINE_LEARNING',
     *     listSuppressedAlerts?: bool,
     *     verificationState?: 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN',
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
