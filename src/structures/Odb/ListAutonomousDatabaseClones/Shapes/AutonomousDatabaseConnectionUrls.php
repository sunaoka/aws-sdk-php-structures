<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabaseClones\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $apexUrl
 * @property string|null $databaseTransformsUrl
 * @property string|null $graphStudioUrl
 * @property string|null $machineLearningNotebookUrl
 * @property string|null $machineLearningUserManagementUrl
 * @property string|null $mongoDbUrl
 * @property string|null $ordsUrl
 * @property string|null $spatialStudioUrl
 * @property string|null $sqlDevWebUrl
 */
class AutonomousDatabaseConnectionUrls extends Shape
{
    /**
     * @param array{
     *     apexUrl?: string|null,
     *     databaseTransformsUrl?: string|null,
     *     graphStudioUrl?: string|null,
     *     machineLearningNotebookUrl?: string|null,
     *     machineLearningUserManagementUrl?: string|null,
     *     mongoDbUrl?: string|null,
     *     ordsUrl?: string|null,
     *     spatialStudioUrl?: string|null,
     *     sqlDevWebUrl?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
