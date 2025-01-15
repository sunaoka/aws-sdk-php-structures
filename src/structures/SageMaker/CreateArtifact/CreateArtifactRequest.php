<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ArtifactName
 * @property Shapes\ArtifactSource $Source
 * @property string $ArtifactType
 * @property array<string, string>|null $Properties
 * @property Shapes\MetadataProperties|null $MetadataProperties
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateArtifactRequest extends Request
{
    /**
     * @param array{
     *     ArtifactName?: string|null,
     *     Source: Shapes\ArtifactSource,
     *     ArtifactType: string,
     *     Properties?: array<string, string>|null,
     *     MetadataProperties?: Shapes\MetadataProperties|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
