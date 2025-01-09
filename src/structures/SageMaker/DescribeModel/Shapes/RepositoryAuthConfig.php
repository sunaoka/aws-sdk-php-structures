<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RepositoryCredentialsProviderArn
 */
class RepositoryAuthConfig extends Shape
{
    /**
     * @param array{RepositoryCredentialsProviderArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
