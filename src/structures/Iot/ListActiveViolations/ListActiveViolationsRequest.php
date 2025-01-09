<?php

namespace Sunaoka\Aws\Structures\Iot\ListActiveViolations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $thingName
 * @property string $securityProfileName
 * @property 'STATIC'|'STATISTICAL'|'MACHINE_LEARNING' $behaviorCriteriaType
 * @property bool $listSuppressedAlerts
 * @property 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN' $verificationState
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListActiveViolationsRequest extends Request
{
    /**
     * @param array{
     *     thingName?: string,
     *     securityProfileName?: string,
     *     behaviorCriteriaType?: 'STATIC'|'STATISTICAL'|'MACHINE_LEARNING',
     *     listSuppressedAlerts?: bool,
     *     verificationState?: 'FALSE_POSITIVE'|'BENIGN_POSITIVE'|'TRUE_POSITIVE'|'UNKNOWN',
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
