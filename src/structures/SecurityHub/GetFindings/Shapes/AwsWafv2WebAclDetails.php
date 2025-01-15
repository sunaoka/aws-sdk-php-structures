<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property bool|null $ManagedbyFirewallManager
 * @property string|null $Id
 * @property int|null $Capacity
 * @property AwsWafv2WebAclCaptchaConfigDetails|null $CaptchaConfig
 * @property AwsWafv2WebAclActionDetails|null $DefaultAction
 * @property string|null $Description
 * @property list<AwsWafv2RulesDetails>|null $Rules
 * @property AwsWafv2VisibilityConfigDetails|null $VisibilityConfig
 */
class AwsWafv2WebAclDetails extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null,
     *     ManagedbyFirewallManager?: bool|null,
     *     Id?: string|null,
     *     Capacity?: int|null,
     *     CaptchaConfig?: AwsWafv2WebAclCaptchaConfigDetails|null,
     *     DefaultAction?: AwsWafv2WebAclActionDetails|null,
     *     Description?: string|null,
     *     Rules?: list<AwsWafv2RulesDetails>|null,
     *     VisibilityConfig?: AwsWafv2VisibilityConfigDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
