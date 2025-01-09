<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateEventBus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $EventBusArn
 * @property string $Description
 * @property string $KmsKeyIdentifier
 * @property Shapes\DeadLetterConfig $DeadLetterConfig
 */
class CreateEventBusResponse extends Response
{
}
