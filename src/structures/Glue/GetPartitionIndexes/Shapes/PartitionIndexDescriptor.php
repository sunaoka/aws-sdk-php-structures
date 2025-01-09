<?php

namespace Sunaoka\Aws\Structures\Glue\GetPartitionIndexes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexName
 * @property list<KeySchemaElement> $Keys
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'FAILED' $IndexStatus
 * @property list<BackfillError> $BackfillErrors
 */
class PartitionIndexDescriptor extends Shape
{
    /**
     * @param array{
     *     IndexName: string,
     *     Keys: list<KeySchemaElement>,
     *     IndexStatus: 'CREATING'|'ACTIVE'|'DELETING'|'FAILED',
     *     BackfillErrors?: list<BackfillError>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
