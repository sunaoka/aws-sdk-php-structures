<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListConfigurationBundleVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bundleArn
 * @property string $bundleId
 * @property string $versionId
 * @property VersionLineageMetadata|null $lineageMetadata
 * @property \Aws\Api\DateTimeResult $versionCreatedAt
 */
class ConfigurationBundleVersionSummary extends Shape
{
    /**
     * @param array{
     *     bundleArn: string,
     *     bundleId: string,
     *     versionId: string,
     *     lineageMetadata?: VersionLineageMetadata|null,
     *     versionCreatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
