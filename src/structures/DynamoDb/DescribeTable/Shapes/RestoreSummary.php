<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeTable\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceBackupArn
 * @property string $SourceTableArn
 * @property \Aws\Api\DateTimeResult $RestoreDateTime
 * @property bool $RestoreInProgress
 */
class RestoreSummary extends Shape
{
    /**
     * @param array{
     *     SourceBackupArn?: string,
     *     SourceTableArn?: string,
     *     RestoreDateTime: \Aws\Api\DateTimeResult,
     *     RestoreInProgress: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
