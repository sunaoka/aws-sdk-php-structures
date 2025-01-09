<?php

namespace Sunaoka\Aws\Structures\Ecr\DescribeImageScanFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEcrContainerImageDetails $awsEcrContainerImage
 */
class ResourceDetails extends Shape
{
    /**
     * @param array{awsEcrContainerImage?: AwsEcrContainerImageDetails} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
