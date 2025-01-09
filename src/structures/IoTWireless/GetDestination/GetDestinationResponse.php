<?php

namespace Sunaoka\Aws\Structures\IoTWireless\GetDestination;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $Expression
 * @property 'RuleName'|'MqttTopic' $ExpressionType
 * @property string $Description
 * @property string $RoleArn
 */
class GetDestinationResponse extends Response
{
}
