<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsCloudFrontDistributionOriginGroupFailover|null $FailoverCriteria
 */
class AwsCloudFrontDistributionOriginGroup extends Shape
{
    /**
     * @param array{FailoverCriteria?: AwsCloudFrontDistributionOriginGroupFailover|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
