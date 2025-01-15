<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceBackupArn
 * @property string|null $SourceTableArn
 * @property string|null $RestoreDateTime
 * @property bool|null $RestoreInProgress
 */
class AwsDynamoDbTableRestoreSummary extends Shape
{
    /**
     * @param array{
     *     SourceBackupArn?: string|null,
     *     SourceTableArn?: string|null,
     *     RestoreDateTime?: string|null,
     *     RestoreInProgress?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
