<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_IAM' $authorizationType
 * @property AwsIamConfig $awsIamConfig
 */
class AuthorizationConfig extends Shape
{
    /**
     * @param array{
     *     authorizationType: 'AWS_IAM',
     *     awsIamConfig?: AwsIamConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
