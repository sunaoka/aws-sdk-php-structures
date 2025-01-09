<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsCloudFrontDistributionOriginGroupFailover $FailoverCriteria
 */
class AwsCloudFrontDistributionOriginGroup extends Shape
{
    /**
     * @param array{FailoverCriteria?: AwsCloudFrontDistributionOriginGroupFailover} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
