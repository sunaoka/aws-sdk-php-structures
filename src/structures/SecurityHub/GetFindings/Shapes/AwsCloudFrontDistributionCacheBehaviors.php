<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsCloudFrontDistributionCacheBehavior> $Items
 */
class AwsCloudFrontDistributionCacheBehaviors extends Shape
{
    /**
     * @param array{Items?: list<AwsCloudFrontDistributionCacheBehavior>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
