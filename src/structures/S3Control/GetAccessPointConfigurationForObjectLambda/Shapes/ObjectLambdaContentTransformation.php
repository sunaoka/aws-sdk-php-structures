<?php

namespace Sunaoka\Aws\Structures\S3Control\GetAccessPointConfigurationForObjectLambda\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsLambdaTransformation|null $AwsLambda
 */
class ObjectLambdaContentTransformation extends Shape
{
    /**
     * @param array{AwsLambda?: AwsLambdaTransformation|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
