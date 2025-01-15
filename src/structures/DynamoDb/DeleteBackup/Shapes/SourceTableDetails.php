<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DeleteBackup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TableName
 * @property string $TableId
 * @property string|null $TableArn
 * @property int|null $TableSizeBytes
 * @property list<KeySchemaElement> $KeySchema
 * @property \Aws\Api\DateTimeResult $TableCreationDateTime
 * @property ProvisionedThroughput $ProvisionedThroughput
 * @property OnDemandThroughput|null $OnDemandThroughput
 * @property int<0, max>|null $ItemCount
 * @property 'PROVISIONED'|'PAY_PER_REQUEST'|null $BillingMode
 */
class SourceTableDetails extends Shape
{
    /**
     * @param array{
     *     TableName: string,
     *     TableId: string,
     *     TableArn?: string|null,
     *     TableSizeBytes?: int|null,
     *     KeySchema: list<KeySchemaElement>,
     *     TableCreationDateTime: \Aws\Api\DateTimeResult,
     *     ProvisionedThroughput: ProvisionedThroughput,
     *     OnDemandThroughput?: OnDemandThroughput|null,
     *     ItemCount?: int<0, max>|null,
     *     BillingMode?: 'PROVISIONED'|'PAY_PER_REQUEST'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
