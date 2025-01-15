<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafv2ActionAllowDetails|null $Allow
 * @property AwsWafv2ActionBlockDetails|null $Block
 * @property AwsWafv2RulesActionCaptchaDetails|null $Captcha
 * @property AwsWafv2RulesActionCountDetails|null $Count
 */
class AwsWafv2RulesActionDetails extends Shape
{
    /**
     * @param array{
     *     Allow?: AwsWafv2ActionAllowDetails|null,
     *     Block?: AwsWafv2ActionBlockDetails|null,
     *     Captcha?: AwsWafv2RulesActionCaptchaDetails|null,
     *     Count?: AwsWafv2RulesActionCountDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
