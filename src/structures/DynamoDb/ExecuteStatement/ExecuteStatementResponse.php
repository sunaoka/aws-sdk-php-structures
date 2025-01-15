<?php

namespace Sunaoka\Aws\Structures\DynamoDb\ExecuteStatement;

use Sunaoka\Aws\Structures\Response;

/**
 * @property list<array<string, Shapes\AttributeValue>>|null $Items
 * @property string|null $NextToken
 * @property Shapes\ConsumedCapacity|null $ConsumedCapacity
 * @property array<string, Shapes\AttributeValue>|null $LastEvaluatedKey
 */
class ExecuteStatementResponse extends Response
{
}
