<?php

namespace Sunaoka\Aws\Structures\DynamoDb\DescribeExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FilterExpression
 * @property string|null $ProjectionExpression
 * @property string|null $KeyConditionExpression
 * @property array<string, string>|null $ExpressionAttributeNames
 * @property array<string, AttributeValue>|null $ExpressionAttributeValues
 */
class FilterSpecification extends Shape
{
    /**
     * @param array{
     *     FilterExpression?: string|null,
     *     ProjectionExpression?: string|null,
     *     KeyConditionExpression?: string|null,
     *     ExpressionAttributeNames?: array<string, string>|null,
     *     ExpressionAttributeValues?: array<string, AttributeValue>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
