<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\BatchStartRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseId
 * @property string $Message
 * @property string $Code
 */
class BatchStartRecommendationsErrorEntry extends Shape
{
    /**
     * @param array{
     *     DatabaseId?: string,
     *     Message?: string,
     *     Code?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
