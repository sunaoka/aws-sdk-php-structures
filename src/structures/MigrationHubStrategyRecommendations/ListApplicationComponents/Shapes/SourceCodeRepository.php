<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListApplicationComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $branch
 * @property string|null $projectName
 * @property string|null $repository
 * @property string|null $versionControlType
 */
class SourceCodeRepository extends Shape
{
    /**
     * @param array{
     *     branch?: string|null,
     *     projectName?: string|null,
     *     repository?: string|null,
     *     versionControlType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
