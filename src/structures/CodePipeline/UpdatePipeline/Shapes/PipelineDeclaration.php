<?php

namespace Sunaoka\Aws\Structures\CodePipeline\UpdatePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $roleArn
 * @property ArtifactStore|null $artifactStore
 * @property array<string, ArtifactStore>|null $artifactStores
 * @property list<StageDeclaration> $stages
 * @property int<1, max>|null $version
 * @property 'QUEUED'|'SUPERSEDED'|'PARALLEL'|null $executionMode
 * @property 'V1'|'V2'|null $pipelineType
 * @property list<PipelineVariableDeclaration>|null $variables
 * @property list<PipelineTriggerDeclaration>|null $triggers
 */
class PipelineDeclaration extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     roleArn: string,
     *     artifactStore?: ArtifactStore|null,
     *     artifactStores?: array<string, ArtifactStore>|null,
     *     stages: list<StageDeclaration>,
     *     version?: int<1, max>|null,
     *     executionMode?: 'QUEUED'|'SUPERSEDED'|'PARALLEL'|null,
     *     pipelineType?: 'V1'|'V2'|null,
     *     variables?: list<PipelineVariableDeclaration>|null,
     *     triggers?: list<PipelineTriggerDeclaration>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
