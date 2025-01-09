<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AssessmentTargetFilter $filter
 * @property string $nextToken
 * @property int $maxResults
 */
class ListAssessmentTargetsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\AssessmentTargetFilter,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
