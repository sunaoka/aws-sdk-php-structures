<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchGetRepositoryScanningConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $repositoryName
 * @property 'REPOSITORY_NOT_FOUND'|null $failureCode
 * @property string|null $failureReason
 */
class RepositoryScanningConfigurationFailure extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string|null,
     *     failureCode?: 'REPOSITORY_NOT_FOUND'|null,
     *     failureReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
