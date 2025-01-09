<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property bool $ManagedbyFirewallManager
 * @property string $Id
 * @property int $Capacity
 * @property AwsWafv2WebAclCaptchaConfigDetails $CaptchaConfig
 * @property AwsWafv2WebAclActionDetails $DefaultAction
 * @property string $Description
 * @property list<AwsWafv2RulesDetails> $Rules
 * @property AwsWafv2VisibilityConfigDetails $VisibilityConfig
 */
class AwsWafv2WebAclDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Arn?: string,
     *     ManagedbyFirewallManager?: bool,
     *     Id?: string,
     *     Capacity?: int,
     *     CaptchaConfig?: AwsWafv2WebAclCaptchaConfigDetails,
     *     DefaultAction?: AwsWafv2WebAclActionDetails,
     *     Description?: string,
     *     Rules?: list<AwsWafv2RulesDetails>,
     *     VisibilityConfig?: AwsWafv2VisibilityConfigDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
