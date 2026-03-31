<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\GetArtifact;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $agentSpaceId
 * @property string $artifactId
 * @property Shapes\Artifact $artifact
 * @property string $fileName
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetArtifactResponse extends Response
{
}
