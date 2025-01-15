<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $Expression
 * @property 'RuleName'|'MqttTopic'|null $ExpressionType
 * @property string|null $Description
 * @property string|null $RoleArn
 */
class GetDestinationResponse extends Response
{
}
