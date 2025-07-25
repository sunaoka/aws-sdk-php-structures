<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateEventBus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EventBusArn
 * @property string|null $Description
 * @property string|null $KmsKeyIdentifier
 * @property Shapes\DeadLetterConfig|null $DeadLetterConfig
 * @property Shapes\LogConfig|null $LogConfig
 */
class CreateEventBusResponse extends Response
{
}
