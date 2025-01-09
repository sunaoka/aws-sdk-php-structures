<?php

namespace Sunaoka\Aws\Structures\DynamoDb\CreateTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $ArchivalDateTime
 * @property string $ArchivalReason
 * @property string $ArchivalBackupArn
 */
class ArchivalSummary extends Shape
{
    /**
     * @param array{
     *     ArchivalDateTime?: \Aws\Api\DateTimeResult,
     *     ArchivalReason?: string,
     *     ArchivalBackupArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
