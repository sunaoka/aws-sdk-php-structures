<?php

namespace Sunaoka\Aws\Structures\WafRegional\GetSampledRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HTTPRequest $Request
 * @property int<0, max> $Weight
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property string|null $Action
 * @property string|null $RuleWithinRuleGroup
 */
class SampledHTTPRequest extends Shape
{
    /**
     * @param array{
     *     Request: HTTPRequest,
     *     Weight: int<0, max>,
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     Action?: string|null,
     *     RuleWithinRuleGroup?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
