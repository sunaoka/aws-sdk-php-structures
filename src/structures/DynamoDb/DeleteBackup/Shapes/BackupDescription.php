<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property BackupDetails $BackupDetails
 * @property SourceTableDetails $SourceTableDetails
 * @property SourceTableFeatureDetails $SourceTableFeatureDetails
 */
class BackupDescription extends Shape
{
    /**
     * @param array{
     *     BackupDetails?: BackupDetails,
     *     SourceTableDetails?: SourceTableDetails,
     *     SourceTableFeatureDetails?: SourceTableFeatureDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
