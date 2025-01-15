<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentTemplates;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $assessmentTargetArns
 * @property Shapes\AssessmentTemplateFilter|null $filter
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListAssessmentTemplatesRequest extends Request
{
    /**
     * @param array{
     *     assessmentTargetArns?: list<string>|null,
     *     filter?: Shapes\AssessmentTemplateFilter|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
