<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ViewerProtocolPolicy
 */
class AwsCloudFrontDistributionCacheBehavior extends Shape
{
    /**
     * @param array{ViewerProtocolPolicy?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
