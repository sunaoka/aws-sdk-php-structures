<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsCloudFrontDistributionOriginGroupFailoverStatusCodes $StatusCodes
 */
class AwsCloudFrontDistributionOriginGroupFailover extends Shape
{
    /**
     * @param array{StatusCodes?: AwsCloudFrontDistributionOriginGroupFailoverStatusCodes} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
