<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsCloudFrontDistributionOriginGroupFailoverStatusCodes|null $StatusCodes
 */
class AwsCloudFrontDistributionOriginGroupFailover extends Shape
{
    /**
     * @param array{StatusCodes?: AwsCloudFrontDistributionOriginGroupFailoverStatusCodes|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
