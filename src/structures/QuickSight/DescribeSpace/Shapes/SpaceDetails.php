<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeSpace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property list<SpaceQuickSightResource>|null $resources
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property int|null $consumedSourceSize
 * @property int|null $consumedSourceDocCount
 * @property string|null $createdBy
 * @property string|null $createdByArn
 */
class SpaceDetails extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     resources?: list<SpaceQuickSightResource>|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     consumedSourceSize?: int|null,
     *     consumedSourceDocCount?: int|null,
     *     createdBy?: string|null,
     *     createdByArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
