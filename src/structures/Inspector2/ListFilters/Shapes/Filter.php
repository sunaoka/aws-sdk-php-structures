<?php

namespace Sunaoka\Aws\Structures\Inspector2\ListFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NONE'|'SUPPRESS' $action
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property FilterCriteria $criteria
 * @property string $description
 * @property string $name
 * @property string $ownerId
 * @property string $reason
 * @property array<string, string> $tags
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
     *     description?: string,
     *     name: string,
     *     ownerId: string,
     *     reason?: string,
     *     tags?: array<string, string>,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
