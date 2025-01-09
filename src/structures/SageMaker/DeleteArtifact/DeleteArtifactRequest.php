<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ArtifactArn
 * @property Shapes\ArtifactSource $Source
 */
class DeleteArtifactRequest extends Request
{
    /**
     * @param array{
     *     ArtifactArn?: string,
     *     Source?: Shapes\ArtifactSource
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
