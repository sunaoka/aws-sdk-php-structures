<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LocalSecondaryIndexInfo>|null $LocalSecondaryIndexes
 * @property list<GlobalSecondaryIndexInfo>|null $GlobalSecondaryIndexes
 * @property StreamSpecification|null $StreamDescription
 * @property TimeToLiveDescription|null $TimeToLiveDescription
 * @property SSEDescription|null $SSEDescription
 */
class SourceTableFeatureDetails extends Shape
{
    /**
     * @param array{
     *     LocalSecondaryIndexes?: list<LocalSecondaryIndexInfo>|null,
     *     GlobalSecondaryIndexes?: list<GlobalSecondaryIndexInfo>|null,
     *     StreamDescription?: StreamSpecification|null,
     *     TimeToLiveDescription?: TimeToLiveDescription|null,
     *     SSEDescription?: SSEDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
