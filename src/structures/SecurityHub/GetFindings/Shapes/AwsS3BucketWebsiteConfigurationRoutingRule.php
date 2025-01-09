<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsS3BucketWebsiteConfigurationRoutingRuleCondition $Condition
 * @property AwsS3BucketWebsiteConfigurationRoutingRuleRedirect $Redirect
 */
class AwsS3BucketWebsiteConfigurationRoutingRule extends Shape
{
    /**
     * @param array{
     *     Condition?: AwsS3BucketWebsiteConfigurationRoutingRuleCondition,
     *     Redirect?: AwsS3BucketWebsiteConfigurationRoutingRuleRedirect
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
