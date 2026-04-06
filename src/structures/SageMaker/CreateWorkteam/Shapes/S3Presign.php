<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateWorkteam\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IamPolicyConstraints|null $IamPolicyConstraints
 */
class S3Presign extends Shape
{
    /**
     * @param array{IamPolicyConstraints?: IamPolicyConstraints|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
