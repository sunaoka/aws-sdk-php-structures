<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\UpdateApplicationComponentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $location
 * @property string $projectName
 * @property string $sourceVersion
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'AZURE_DEVOPS_GIT' $versionControl
 */
class SourceCode extends Shape
{
    /**
     * @param array{
     *     location?: string,
     *     projectName?: string,
     *     sourceVersion?: string,
     *     versionControl?: 'GITHUB'|'GITHUB_ENTERPRISE'|'AZURE_DEVOPS_GIT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
