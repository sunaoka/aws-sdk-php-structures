<?php

namespace Sunaoka\Aws\Structures\Inspector\ListAssessmentTargets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\AssessmentTargetFilter|null $filter
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListAssessmentTargetsRequest extends Request
{
    /**
     * @param array{
     *     filter?: Shapes\AssessmentTargetFilter|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
