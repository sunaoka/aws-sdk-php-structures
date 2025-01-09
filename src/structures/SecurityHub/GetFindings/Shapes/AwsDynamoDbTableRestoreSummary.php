<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceBackupArn
 * @property string $SourceTableArn
 * @property string $RestoreDateTime
 * @property bool $RestoreInProgress
 */
class AwsDynamoDbTableRestoreSummary extends Shape
{
    /**
     * @param array{
     *     SourceBackupArn?: string,
     *     SourceTableArn?: string,
     *     RestoreDateTime?: string,
     *     RestoreInProgress?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
