<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $versionControlConfigurationTimeStamp
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'AZURE_DEVOPS_GIT'|null $versionControlType
 */
class VersionControlInfo extends Shape
{
    /**
     * @param array{
     *     versionControlConfigurationTimeStamp?: string|null,
     *     versionControlType?: 'GITHUB'|'GITHUB_ENTERPRISE'|'AZURE_DEVOPS_GIT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
