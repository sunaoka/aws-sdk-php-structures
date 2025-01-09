<?php

namespace Sunaoka\Aws\Structures\Waf\GetSampledRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HTTPRequest $Request
 * @property int<0, max> $Weight
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property string $Action
 * @property string $RuleWithinRuleGroup
 */
class SampledHTTPRequest extends Shape
{
    /**
     * @param array{
     *     Request: HTTPRequest,
     *     Weight: int<0, max>,
     *     Timestamp?: \Aws\Api\DateTimeResult,
     *     Action?: string,
     *     RuleWithinRuleGroup?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
