<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryArn
 * @property string|null $registryId
 * @property string|null $repositoryName
 * @property string|null $repositoryUri
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class Repository extends Shape
{
    /**
     * @param array{
     *     repositoryArn?: string|null,
     *     registryId?: string|null,
     *     repositoryName?: string|null,
     *     repositoryUri?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
