<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $assessmentTemplateArns
 * @property Shapes\AssessmentRunFilter|null $filter
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListAssessmentRunsRequest extends Request
{
    /**
     * @param array{
     *     assessmentTemplateArns?: list<string>|null,
     *     filter?: Shapes\AssessmentRunFilter|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
