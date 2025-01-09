<?php

namespace Sunaoka\Aws\Structures\Detective\StartInvestigation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 * @property string $EntityArn
 * @property \Aws\Api\DateTimeResult $ScopeStartTime
 * @property \Aws\Api\DateTimeResult $ScopeEndTime
 */
class StartInvestigationRequest extends Request
{
    /**
     * @param array{
     *     GraphArn: string,
     *     EntityArn: string,
     *     ScopeStartTime: \Aws\Api\DateTimeResult,
     *     ScopeEndTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
