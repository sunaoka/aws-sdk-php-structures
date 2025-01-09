<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArtifactArn
 * @property string $ArtifactName
 * @property array<string, string> $Properties
 * @property list<string> $PropertiesToRemove
 */
class UpdateArtifactRequest extends Request
{
    /**
     * @param array{
     *     ArtifactArn: string,
     *     ArtifactName?: string,
     *     Properties?: array<string, string>,
     *     PropertiesToRemove?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
