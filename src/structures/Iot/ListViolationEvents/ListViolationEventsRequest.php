<?php

namespace Sunaoka\Aws\Structures\Iot\ListViolationEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property \Aws\Api\DateTimeResult $startTime
 * @property \Aws\Api\DateTimeResult $endTime
 * @property string|null $thingName
 * @property string|null $securityProfileName
 * @property 'STATIC'|'STATISTICAL'|'MACHINE_LEARNING'|null $behaviorCriteriaType
 * @property bool|null $listSuppressedAlerts
 * @property 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN'|null $verificationState
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListViolationEventsRequest extends Request
{
    /**
     * @param array{
     *     startTime: \Aws\Api\DateTimeResult,
     *     endTime: \Aws\Api\DateTimeResult,
     *     thingName?: string|null,
     *     securityProfileName?: string|null,
     *     behaviorCriteriaType?: 'STATIC'|'STATISTICAL'|'MACHINE_LEARNING'|null,
     *     listSuppressedAlerts?: bool|null,
     *     verificationState?: 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
