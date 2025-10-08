<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\GetPlanEvaluationStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $planArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class GetPlanEvaluationStatusRequest extends Request
{
    /**
     * @param array{
     *     planArn: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
