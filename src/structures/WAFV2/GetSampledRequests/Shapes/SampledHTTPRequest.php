<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetSampledRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HTTPRequest $Request
 * @property int<0, max> $Weight
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property string $Action
 * @property string $RuleNameWithinRuleGroup
 * @property list<HTTPHeader> $RequestHeadersInserted
 * @property int<200, 599> $ResponseCodeSent
 * @property list<Label> $Labels
 * @property CaptchaResponse $CaptchaResponse
 * @property ChallengeResponse $ChallengeResponse
 * @property string $OverriddenAction
 */
class SampledHTTPRequest extends Shape
{
    /**
     * @param array{
     *     Request: HTTPRequest,
     *     Weight: int<0, max>,
     *     Timestamp?: \Aws\Api\DateTimeResult,
     *     Action?: string,
     *     RuleNameWithinRuleGroup?: string,
     *     RequestHeadersInserted?: list<HTTPHeader>,
     *     ResponseCodeSent?: int<200, 599>,
     *     Labels?: list<Label>,
     *     CaptchaResponse?: CaptchaResponse,
     *     ChallengeResponse?: ChallengeResponse,
     *     OverriddenAction?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
