<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AwsCloudFrontDistributionCacheBehavior>|null $Items
 */
class AwsCloudFrontDistributionCacheBehaviors extends Shape
{
    /**
     * @param array{Items?: list<AwsCloudFrontDistributionCacheBehavior>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
