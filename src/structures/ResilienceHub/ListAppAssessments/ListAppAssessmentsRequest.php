<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppAssessments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $appArn
 * @property string|null $assessmentName
 * @property list<'Pending'|'InProgress'|'Failed'|'Success'>|null $assessmentStatus
 * @property 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy'|null $complianceStatus
 * @property 'User'|'System'|null $invoker
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property bool|null $reverseOrder
 */
class ListAppAssessmentsRequest extends Request
{
    /**
     * @param array{
     *     appArn?: string|null,
     *     assessmentName?: string|null,
     *     assessmentStatus?: list<'Pending'|'InProgress'|'Failed'|'Success'>|null,
     *     complianceStatus?: 'PolicyBreached'|'PolicyMet'|'NotApplicable'|'MissingPolicy'|null,
     *     invoker?: 'User'|'System'|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     reverseOrder?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
