<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentRuns;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $assessmentTemplateArns
 * @property Shapes\AssessmentRunFilter $filter
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAssessmentRunsRequest extends Request
{
    /**
     * @param array{
     *     assessmentTemplateArns?: list<string>,
     *     filter?: Shapes\AssessmentRunFilter,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
