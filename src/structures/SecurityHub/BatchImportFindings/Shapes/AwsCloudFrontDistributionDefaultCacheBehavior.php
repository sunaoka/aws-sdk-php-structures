<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ViewerProtocolPolicy
 */
class AwsCloudFrontDistributionDefaultCacheBehavior extends Shape
{
    /**
     * @param array{ViewerProtocolPolicy?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
