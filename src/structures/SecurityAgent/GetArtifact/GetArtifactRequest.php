<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\GetArtifact;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property string $artifactId
 */
class GetArtifactRequest extends Request
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
