<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchGetRepositoryScanningConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $repositoryName
 * @property 'REPOSITORY_NOT_FOUND' $failureCode
 * @property string $failureReason
 */
class RepositoryScanningConfigurationFailure extends Shape
{
    /**
     * @param array{
     *     repositoryName?: string,
     *     failureCode?: 'REPOSITORY_NOT_FOUND',
     *     failureReason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
