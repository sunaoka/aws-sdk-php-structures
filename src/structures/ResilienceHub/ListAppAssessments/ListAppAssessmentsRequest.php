<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppAssessments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appArn
 * @property string $assessmentName
 * @property list<'Pending'|'InProgress'|'Failed'|'Success'> $assessmentStatus
 * @property 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy' $complianceStatus
 * @property 'User'|'System' $invoker
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property bool $reverseOrder
 */
class ListAppAssessmentsRequest extends Request
{
    /**
     * @param array{
     *     appArn?: string,
     *     assessmentName?: string,
     *     assessmentStatus?: list<'Pending'|'InProgress'|'Failed'|'Success'>,
     *     complianceStatus?: 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy',
     *     invoker?: 'User'|'System',
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     reverseOrder?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
