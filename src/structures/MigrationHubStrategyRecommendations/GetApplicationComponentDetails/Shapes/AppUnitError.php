<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\GetApplicationComponentDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREDENTIAL_ERROR'|'CONNECTIVITY_ERROR'|'PERMISSION_ERROR'|'UNSUPPORTED_ERROR'|'OTHER_ERROR'|null $appUnitErrorCategory
 */
class AppUnitError extends Shape
{
    /**
     * @param array{appUnitErrorCategory?: 'CREDENTIAL_ERROR'|'CONNECTIVITY_ERROR'|'PERMISSION_ERROR'|'UNSUPPORTED_ERROR'|'OTHER_ERROR'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
