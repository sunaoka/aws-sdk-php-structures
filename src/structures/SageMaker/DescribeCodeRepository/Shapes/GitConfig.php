<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeCodeRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RepositoryUrl
 * @property string|null $Branch
 * @property string|null $SecretArn
 */
class GitConfig extends Shape
{
    /**
     * @param array{
     *     RepositoryUrl: string,
     *     Branch?: string|null,
     *     SecretArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
