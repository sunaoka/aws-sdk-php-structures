<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValue;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\PropertyLatestValue> $propertyValues
 * @property string $nextToken
 * @property list<list<array<string, Shapes\DataValue>>> $tabularPropertyValues
 */
class GetPropertyValueResponse extends Response
{
}
