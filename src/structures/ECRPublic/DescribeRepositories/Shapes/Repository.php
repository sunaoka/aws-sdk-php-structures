<?php

namespace Sunaoka\Aws\Structures\ECRPublic\DescribeRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryArn
 * @property string $registryId
 * @property string $repositoryName
 * @property string $repositoryUri
 * @property \Aws\Api\DateTimeResult $createdAt
 */
class Repository extends Shape
{
    /**
     * @param array{
     *     repositoryArn?: string,
     *     registryId?: string,
     *     repositoryName?: string,
     *     repositoryUri?: string,
     *     createdAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
