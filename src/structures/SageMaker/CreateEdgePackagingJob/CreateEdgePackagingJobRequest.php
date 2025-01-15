<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateEdgePackagingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EdgePackagingJobName
 * @property string $CompilationJobName
 * @property string $ModelName
 * @property string $ModelVersion
 * @property string $RoleArn
 * @property Shapes\EdgeOutputConfig $OutputConfig
 * @property string|null $ResourceKey
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateEdgePackagingJobRequest extends Request
{
    /**
     * @param array{
     *     EdgePackagingJobName: string,
     *     CompilationJobName: string,
     *     ModelName: string,
     *     ModelVersion: string,
     *     RoleArn: string,
     *     OutputConfig: Shapes\EdgeOutputConfig,
     *     ResourceKey?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
