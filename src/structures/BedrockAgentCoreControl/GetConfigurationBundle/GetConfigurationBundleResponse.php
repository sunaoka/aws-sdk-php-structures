<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetConfigurationBundle;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $bundleArn
 * @property string $bundleId
 * @property string $bundleName
 * @property string|null $description
 * @property string $versionId
 * @property array<string, Shapes\ComponentConfiguration> $components
 * @property Shapes\VersionLineageMetadata|null $lineageMetadata
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class GetConfigurationBundleResponse extends Response
{
}
