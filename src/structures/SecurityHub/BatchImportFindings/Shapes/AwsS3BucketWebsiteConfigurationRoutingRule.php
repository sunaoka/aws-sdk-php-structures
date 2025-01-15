<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsS3BucketWebsiteConfigurationRoutingRuleCondition|null $Condition
 * @property AwsS3BucketWebsiteConfigurationRoutingRuleRedirect|null $Redirect
 */
class AwsS3BucketWebsiteConfigurationRoutingRule extends Shape
{
    /**
     * @param array{
     *     Condition?: AwsS3BucketWebsiteConfigurationRoutingRuleCondition|null,
     *     Redirect?: AwsS3BucketWebsiteConfigurationRoutingRuleRedirect|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
