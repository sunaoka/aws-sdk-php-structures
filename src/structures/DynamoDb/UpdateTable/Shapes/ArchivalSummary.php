<?php

namespace Sunaoka\Aws\Structures\DynamoDb\UpdateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $ArchivalDateTime
 * @property string|null $ArchivalReason
 * @property string|null $ArchivalBackupArn
 */
class ArchivalSummary extends Shape
{
    /**
     * @param array{
     *     ArchivalDateTime?: \Aws\Api\DateTimeResult|null,
     *     ArchivalReason?: string|null,
     *     ArchivalBackupArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
