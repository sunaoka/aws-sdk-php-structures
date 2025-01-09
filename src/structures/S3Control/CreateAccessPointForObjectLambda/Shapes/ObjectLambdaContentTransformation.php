<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateAccessPointForObjectLambda\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsLambdaTransformation $AwsLambda
 */
class ObjectLambdaContentTransformation extends Shape
{
    /**
     * @param array{AwsLambda?: AwsLambdaTransformation} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
