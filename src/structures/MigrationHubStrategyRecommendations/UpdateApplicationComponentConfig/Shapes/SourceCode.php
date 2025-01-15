<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\UpdateApplicationComponentConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $location
 * @property string|null $projectName
 * @property string|null $sourceVersion
 * @property 'GITHUB'|'GITHUB_ENTERPRISE'|'AZURE_DEVOPS_GIT'|null $versionControl
 */
class SourceCode extends Shape
{
    /**
     * @param array{
     *     location?: string|null,
     *     projectName?: string|null,
     *     sourceVersion?: string|null,
     *     versionControl?: 'GITHUB'|'GITHUB_ENTERPRISE'|'AZURE_DEVOPS_GIT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
