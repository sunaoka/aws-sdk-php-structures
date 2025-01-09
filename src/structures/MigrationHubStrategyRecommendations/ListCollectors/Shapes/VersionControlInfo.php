<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListCollectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $versionControlConfigurationTimeStamp
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'AZURE_DEVOPS_GIT' $versionControlType
 */
class VersionControlInfo extends Shape
{
    /**
     * @param array{
     *     versionControlConfigurationTimeStamp?: string,
     *     versionControlType?: 'GITHUB'|'GITHUB_ENTERPRISE'|'AZURE_DEVOPS_GIT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
