<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IamPolicyConstraints $IamPolicyConstraints
 */
class S3Presign extends Shape
{
    /**
     * @param array{IamPolicyConstraints?: IamPolicyConstraints} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
