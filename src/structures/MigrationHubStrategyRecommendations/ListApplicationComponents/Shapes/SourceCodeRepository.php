<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListApplicationComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $branch
 * @property string $projectName
 * @property string $repository
 * @property string $versionControlType
 */
class SourceCodeRepository extends Shape
{
    /**
     * @param array{
     *     branch?: string,
     *     projectName?: string,
     *     repository?: string,
     *     versionControlType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
