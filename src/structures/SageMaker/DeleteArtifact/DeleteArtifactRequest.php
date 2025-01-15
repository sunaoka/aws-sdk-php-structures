<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ArtifactArn
 * @property Shapes\ArtifactSource|null $Source
 */
class DeleteArtifactRequest extends Request
{
    /**
     * @param array{
     *     ArtifactArn?: string|null,
     *     Source?: Shapes\ArtifactSource|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
