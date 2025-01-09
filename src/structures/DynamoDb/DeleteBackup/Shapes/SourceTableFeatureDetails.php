<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LocalSecondaryIndexInfo> $LocalSecondaryIndexes
 * @property list<GlobalSecondaryIndexInfo> $GlobalSecondaryIndexes
 * @property StreamSpecification $StreamDescription
 * @property TimeToLiveDescription $TimeToLiveDescription
 * @property SSEDescription $SSEDescription
 */
class SourceTableFeatureDetails extends Shape
{
    /**
     * @param array{
     *     LocalSecondaryIndexes?: list<LocalSecondaryIndexInfo>,
     *     GlobalSecondaryIndexes?: list<GlobalSecondaryIndexInfo>,
     *     StreamDescription?: StreamSpecification,
     *     TimeToLiveDescription?: TimeToLiveDescription,
     *     SSEDescription?: SSEDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
