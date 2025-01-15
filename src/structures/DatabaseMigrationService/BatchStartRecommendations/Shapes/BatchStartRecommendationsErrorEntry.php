<?php

namespace Sunaoka\Aws\Structures\DatabaseMigrationService\BatchStartRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DatabaseId
 * @property string|null $Message
 * @property string|null $Code
 */
class BatchStartRecommendationsErrorEntry extends Shape
{
    /**
     * @param array{
     *     DatabaseId?: string|null,
     *     Message?: string|null,
     *     Code?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
