<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $planArn
 * @property string $executionId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class GetPlanExecutionRequest extends Request
{
    /**
     * @param array{
     *     planArn: string,
     *     executionId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
