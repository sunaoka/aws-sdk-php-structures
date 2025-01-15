<?php

namespace Sunaoka\Aws\Structures\RoboMaker\ListWorlds\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $generationJob
 * @property string|null $template
 */
class WorldSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     generationJob?: string|null,
     *     template?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
