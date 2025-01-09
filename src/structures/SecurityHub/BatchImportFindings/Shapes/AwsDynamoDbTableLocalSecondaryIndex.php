<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IndexArn
 * @property string $IndexName
 * @property list<AwsDynamoDbTableKeySchema> $KeySchema
 * @property AwsDynamoDbTableProjection $Projection
 */
class AwsDynamoDbTableLocalSecondaryIndex extends Shape
{
    /**
     * @param array{
     *     IndexArn?: string,
     *     IndexName?: string,
     *     KeySchema?: list<AwsDynamoDbTableKeySchema>,
     *     Projection?: AwsDynamoDbTableProjection
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
