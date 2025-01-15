<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $IndexArn
 * @property string|null $IndexName
 * @property list<AwsDynamoDbTableKeySchema>|null $KeySchema
 * @property AwsDynamoDbTableProjection|null $Projection
 */
class AwsDynamoDbTableLocalSecondaryIndex extends Shape
{
    /**
     * @param array{
     *     IndexArn?: string|null,
     *     IndexName?: string|null,
     *     KeySchema?: list<AwsDynamoDbTableKeySchema>|null,
     *     Projection?: AwsDynamoDbTableProjection|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
