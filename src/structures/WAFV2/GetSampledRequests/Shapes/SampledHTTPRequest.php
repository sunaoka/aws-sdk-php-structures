<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetSampledRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HTTPRequest $Request
 * @property int<0, max> $Weight
 * @property \Aws\Api\DateTimeResult|null $Timestamp
 * @property string|null $Action
 * @property string|null $RuleNameWithinRuleGroup
 * @property list<HTTPHeader>|null $RequestHeadersInserted
 * @property int<200, 599>|null $ResponseCodeSent
 * @property list<Label>|null $Labels
 * @property CaptchaResponse|null $CaptchaResponse
 * @property ChallengeResponse|null $ChallengeResponse
 * @property string|null $OverriddenAction
 */
class SampledHTTPRequest extends Shape
{
    /**
     * @param array{
     *     Request: HTTPRequest,
     *     Weight: int<0, max>,
     *     Timestamp?: \Aws\Api\DateTimeResult|null,
     *     Action?: string|null,
     *     RuleNameWithinRuleGroup?: string|null,
     *     RequestHeadersInserted?: list<HTTPHeader>|null,
     *     ResponseCodeSent?: int<200, 599>|null,
     *     Labels?: list<Label>|null,
     *     CaptchaResponse?: CaptchaResponse|null,
     *     ChallengeResponse?: ChallengeResponse|null,
     *     OverriddenAction?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
