<?php

namespace Sunaoka\Aws\Structures\VPCLattice\ListRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property string $id
 * @property bool $isDefault
 * @property \Aws\Api\DateTimeResult $lastUpdatedAt
 * @property string $name
 * @property int $priority
 */
class RuleSummary extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     id?: string,
     *     isDefault?: bool,
     *     lastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     priority?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
