<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HttpErrorCodeReturnedEquals
 * @property string $KeyPrefixEquals
 */
class AwsS3BucketWebsiteConfigurationRoutingRuleCondition extends Shape
{
    /**
     * @param array{
     *     HttpErrorCodeReturnedEquals?: string,
     *     KeyPrefixEquals?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
