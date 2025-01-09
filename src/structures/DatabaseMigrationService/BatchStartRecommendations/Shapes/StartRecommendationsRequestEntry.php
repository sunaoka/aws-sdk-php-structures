<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\BatchStartRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseId
 * @property RecommendationSettings $Settings
 */
class StartRecommendationsRequestEntry extends Shape
{
    /**
     * @param array{
     *     DatabaseId: string,
     *     Settings: RecommendationSettings
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
