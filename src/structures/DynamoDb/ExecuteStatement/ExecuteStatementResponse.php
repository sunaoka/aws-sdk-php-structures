<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ExecuteStatement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<array<string, Shapes\AttributeValue>> $Items
 * @property string $NextToken
 * @property Shapes\ConsumedCapacity $ConsumedCapacity
 * @property array<string, Shapes\AttributeValue> $LastEvaluatedKey
 */
class ExecuteStatementResponse extends Response
{
}
