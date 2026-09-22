<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListViews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'USER'|'MANAGED' $type
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class ViewSummary extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     type: 'USER'|'MANAGED',
     *     description?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
