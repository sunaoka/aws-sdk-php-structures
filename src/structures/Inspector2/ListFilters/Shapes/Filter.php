<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'SUPPRESS' $action
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property FilterCriteria $criteria
 * @property string|null $description
 * @property string $name
 * @property string $ownerId
 * @property string|null $reason
 * @property array<string, string>|null $tags
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class Filter extends Shape
{
    /**
     * @param array{
     *     action: 'NONE'|'SUPPRESS',
     *     arn: string,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     criteria: FilterCriteria,
     *     description?: string|null,
     *     name: string,
     *     ownerId: string,
     *     reason?: string|null,
     *     tags?: array<string, string>|null,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
