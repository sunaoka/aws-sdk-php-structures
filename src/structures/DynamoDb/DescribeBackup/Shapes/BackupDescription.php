<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BackupDetails|null $BackupDetails
 * @property SourceTableDetails|null $SourceTableDetails
 * @property SourceTableFeatureDetails|null $SourceTableFeatureDetails
 */
class BackupDescription extends Shape
{
    /**
     * @param array{
     *     BackupDetails?: BackupDetails|null,
     *     SourceTableDetails?: SourceTableDetails|null,
     *     SourceTableFeatureDetails?: SourceTableFeatureDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
