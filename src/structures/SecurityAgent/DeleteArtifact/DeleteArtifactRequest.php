<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\DeleteArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $artifactId
 */
class DeleteArtifactRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     artifactId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
