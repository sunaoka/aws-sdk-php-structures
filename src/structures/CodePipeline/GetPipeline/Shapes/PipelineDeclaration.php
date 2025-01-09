<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $roleArn
 * @property ArtifactStore $artifactStore
 * @property array<string, ArtifactStore> $artifactStores
 * @property list<StageDeclaration> $stages
 * @property int<1, max> $version
 * @property 'QUEUED'|'SUPERSEDED'|'PARALLEL' $executionMode
 * @property 'V1'|'V2' $pipelineType
 * @property list<PipelineVariableDeclaration> $variables
 * @property list<PipelineTriggerDeclaration> $triggers
 */
class PipelineDeclaration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     roleArn: string,
     *     artifactStore?: ArtifactStore,
     *     artifactStores?: array<string, ArtifactStore>,
     *     stages: list<StageDeclaration>,
     *     version?: int<1, max>,
     *     executionMode?: 'QUEUED'|'SUPERSEDED'|'PARALLEL',
     *     pipelineType?: 'V1'|'V2',
     *     variables?: list<PipelineVariableDeclaration>,
     *     triggers?: list<PipelineTriggerDeclaration>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
