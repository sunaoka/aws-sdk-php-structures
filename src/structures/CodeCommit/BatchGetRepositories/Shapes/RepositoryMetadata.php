<?php

namespace Sunaoka\Aws\Structures\CodeCommit\BatchGetRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $accountId
 * @property string $repositoryId
 * @property string $repositoryName
 * @property string $repositoryDescription
 * @property string $defaultBranch
 * @property \Aws\Api\DateTimeResult $lastModifiedDate
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property string $cloneUrlHttp
 * @property string $cloneUrlSsh
 * @property string $Arn
 * @property string $kmsKeyId
 */
class RepositoryMetadata extends Shape
{
    /**
     * @param array{
     *     accountId?: string,
     *     repositoryId?: string,
     *     repositoryName?: string,
     *     repositoryDescription?: string,
     *     defaultBranch?: string,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult,
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     cloneUrlHttp?: string,
     *     cloneUrlSsh?: string,
     *     Arn?: string,
     *     kmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
