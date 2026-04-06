<?php

namespace Sunaoka\Aws\Structures\CodePipeline\GetPipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $roleArn
 * @property ArtifactStore|null $artifactStore
 * @property array<string, ArtifactStore>|null $artifactStores
 * @property list<StageDeclaration> $stages
 * @property int<1, max>|null $version
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
     *     version?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
