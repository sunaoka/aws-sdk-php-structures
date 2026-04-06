<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppAssessmentResourceDrifts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListAppAssessmentResourceDriftsRequest extends Request
{
    /**
     * @param array{
     *     assessmentArn: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
