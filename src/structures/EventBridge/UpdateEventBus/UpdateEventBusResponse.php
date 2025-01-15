<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateEventBus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property string|null $Name
 * @property string|null $KmsKeyIdentifier
 * @property string|null $Description
 * @property Shapes\DeadLetterConfig|null $DeadLetterConfig
 */
class UpdateEventBusResponse extends Response
{
}
