<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArtifactArn
 * @property string|null $ArtifactName
 * @property array<string, string>|null $Properties
 * @property list<string>|null $PropertiesToRemove
 */
class UpdateArtifactRequest extends Request
{
    /**
     * @param array{
     *     ArtifactArn: string,
     *     ArtifactName?: string|null,
     *     Properties?: array<string, string>|null,
     *     PropertiesToRemove?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
