<?php

namespace Sunaoka\Aws\Structures\MigrationHubStrategyRecommendations\ListApplicationComponents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $secretName
 */
class DatabaseConfigDetail extends Shape
{
    /**
     * @param array{secretName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
