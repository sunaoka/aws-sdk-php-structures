<?php

namespace Sunaoka\Aws\Structures\AppSync\ListDataSources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AWS_IAM' $authorizationType
 * @property AwsIamConfig|null $awsIamConfig
 */
class AuthorizationConfig extends Shape
{
    /**
     * @param array{
     *     authorizationType: 'AWS_IAM',
     *     awsIamConfig?: AwsIamConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
