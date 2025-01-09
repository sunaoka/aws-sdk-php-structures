<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafv2ActionAllowDetails $Allow
 * @property AwsWafv2ActionBlockDetails $Block
 * @property AwsWafv2RulesActionCaptchaDetails $Captcha
 * @property AwsWafv2RulesActionCountDetails $Count
 */
class AwsWafv2RulesActionDetails extends Shape
{
    /**
     * @param array{
     *     Allow?: AwsWafv2ActionAllowDetails,
     *     Block?: AwsWafv2ActionBlockDetails,
     *     Captcha?: AwsWafv2RulesActionCaptchaDetails,
     *     Count?: AwsWafv2RulesActionCountDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
