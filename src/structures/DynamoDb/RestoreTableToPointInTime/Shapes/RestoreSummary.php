<?php

namespace Sunaoka\Aws\Structures\DynamoDb\RestoreTableToPointInTime\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceBackupArn
 * @property string|null $SourceTableArn
 * @property \Aws\Api\DateTimeResult $RestoreDateTime
 * @property bool $RestoreInProgress
 */
class RestoreSummary extends Shape
{
    /**
     * @param array{
     *     SourceBackupArn?: string|null,
     *     SourceTableArn?: string|null,
     *     RestoreDateTime: \Aws\Api\DateTimeResult,
     *     RestoreInProgress: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
