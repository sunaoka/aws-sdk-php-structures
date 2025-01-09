<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArtifactName
 * @property Shapes\ArtifactSource $Source
 * @property string $ArtifactType
 * @property array<string, string> $Properties
 * @property Shapes\MetadataProperties $MetadataProperties
 * @property list<Shapes\Tag> $Tags
 */
class CreateArtifactRequest extends Request
{
    /**
     * @param array{
     *     ArtifactName?: string,
     *     Source: Shapes\ArtifactSource,
     *     ArtifactType: string,
     *     Properties?: array<string, string>,
     *     MetadataProperties?: Shapes\MetadataProperties,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
