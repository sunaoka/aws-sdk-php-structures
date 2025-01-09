<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCodeRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RepositoryUrl
 * @property string $Branch
 * @property string $SecretArn
 */
class GitConfig extends Shape
{
    /**
     * @param array{
     *     RepositoryUrl: string,
     *     Branch?: string,
     *     SecretArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
