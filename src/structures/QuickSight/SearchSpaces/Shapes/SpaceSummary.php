<?php

namespace Sunaoka\Aws\Structures\QuickSight\SearchSpaces\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $spaceId
 * @property string|null $spaceArn
 * @property string|null $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property int|null $consumedSourceSize
 * @property int|null $consumedSourceDocCount
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property string|null $createdBy
 * @property string|null $createdByArn
 * @property int|null $resourcesCount
 */
class SpaceSummary extends Shape
{
    /**
     * @param array{
     *     spaceId: string,
     *     spaceArn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     consumedSourceSize?: int|null,
     *     consumedSourceDocCount?: int|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     createdBy?: string|null,
     *     createdByArn?: string|null,
     *     resourcesCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
