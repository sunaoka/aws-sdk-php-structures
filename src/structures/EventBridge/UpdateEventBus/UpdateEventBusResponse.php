<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateEventBus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Name
 * @property string $KmsKeyIdentifier
 * @property string $Description
 * @property Shapes\DeadLetterConfig $DeadLetterConfig
 */
class UpdateEventBusResponse extends Response
{
}
