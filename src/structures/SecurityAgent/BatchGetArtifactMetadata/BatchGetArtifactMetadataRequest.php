<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetArtifactMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agentSpaceId
 * @property list<string> $artifactIds
 */
class BatchGetArtifactMetadataRequest extends Request
{
    /**
     * @param array{
     *     agentSpaceId: string,
     *     artifactIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
