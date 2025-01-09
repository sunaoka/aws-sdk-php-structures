<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $assessmentTargetArns
 * @property Shapes\AssessmentTemplateFilter $filter
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAssessmentTemplatesRequest extends Request
{
    /**
     * @param array{
     *     assessmentTargetArns?: list<string>,
     *     filter?: Shapes\AssessmentTemplateFilter,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
