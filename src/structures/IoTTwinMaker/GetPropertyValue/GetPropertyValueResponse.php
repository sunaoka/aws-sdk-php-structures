<?php

namespace Sunaoka\Aws\Structures\IoTTwinMaker\GetPropertyValue;

use Sunaoka\Aws\Structures\Response;

/**
 * @property array<string, Shapes\PropertyLatestValue>|null $propertyValues
 * @property string|null $nextToken
 * @property list<list<array<string, Shapes\DataValue>>>|null $tabularPropertyValues
 */
class GetPropertyValueResponse extends Response
{
}
