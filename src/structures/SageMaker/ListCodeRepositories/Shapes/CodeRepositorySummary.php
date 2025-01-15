<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListCodeRepositories\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CodeRepositoryName
 * @property string $CodeRepositoryArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property GitConfig|null $GitConfig
 */
class CodeRepositorySummary extends Shape
{
    /**
     * @param array{
     *     CodeRepositoryName: string,
     *     CodeRepositoryArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime: \Aws\Api\DateTimeResult,
     *     GitConfig?: GitConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
