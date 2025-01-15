<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetServerDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONNECTIVITY_ERROR'|'CREDENTIAL_ERROR'|'PERMISSION_ERROR'|'ARCHITECTURE_ERROR'|'OTHER_ERROR'|null $serverErrorCategory
 */
class ServerError extends Shape
{
    /**
     * @param array{serverErrorCategory?: 'CONNECTIVITY_ERROR'|'CREDENTIAL_ERROR'|'PERMISSION_ERROR'|'ARCHITECTURE_ERROR'|'OTHER_ERROR'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
