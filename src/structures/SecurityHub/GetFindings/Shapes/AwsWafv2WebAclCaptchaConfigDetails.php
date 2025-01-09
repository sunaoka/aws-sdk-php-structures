<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsWafv2WebAclCaptchaConfigImmunityTimePropertyDetails $ImmunityTimeProperty
 */
class AwsWafv2WebAclCaptchaConfigDetails extends Shape
{
    /**
     * @param array{ImmunityTimeProperty?: AwsWafv2WebAclCaptchaConfigImmunityTimePropertyDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
