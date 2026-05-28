<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListFailureModeAssessments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $serviceArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListFailureModeAssessmentsRequest extends Request
{
    /**
     * @param array{
     *     serviceArn: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
