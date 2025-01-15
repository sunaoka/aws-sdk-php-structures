<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetRepository\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $repositoryId
 * @property string|null $repositoryName
 * @property string|null $repositoryDescription
 * @property string|null $defaultBranch
 * @property \Aws\Api\DateTimeResult|null $lastModifiedDate
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property string|null $cloneUrlHttp
 * @property string|null $cloneUrlSsh
 * @property string|null $Arn
 * @property string|null $kmsKeyId
 */
class RepositoryMetadata extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     repositoryId?: string|null,
     *     repositoryName?: string|null,
     *     repositoryDescription?: string|null,
     *     defaultBranch?: string|null,
     *     lastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     cloneUrlHttp?: string|null,
     *     cloneUrlSsh?: string|null,
     *     Arn?: string|null,
     *     kmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
