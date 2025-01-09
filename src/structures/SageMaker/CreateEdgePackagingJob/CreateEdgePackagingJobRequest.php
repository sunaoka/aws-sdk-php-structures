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
 * @property string $ResourceKey
 * @property list<Shapes\Tag> $Tags
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
     *     ResourceKey?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
