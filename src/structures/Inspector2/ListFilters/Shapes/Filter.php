<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $ownerId
 * @property string $name
 * @property FilterCriteria $criteria
 * @property 'NONE'|'SUPPRESS' $action
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property string|null $description
 * @property string|null $reason
 * @property array<string, string>|null $tags
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     ownerId: string,
     *     name: string,
     *     criteria: FilterCriteria,
     *     action: 'NONE'|'SUPPRESS',
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     description?: string|null,
     *     reason?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
