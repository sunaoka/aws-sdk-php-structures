<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $HttpErrorCodeReturnedEquals
 * @property string|null $KeyPrefixEquals
 */
class AwsS3BucketWebsiteConfigurationRoutingRuleCondition extends Shape
{
    /**
     * @param array{
     *     HttpErrorCodeReturnedEquals?: string|null,
     *     KeyPrefixEquals?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
