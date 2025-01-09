<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateEventBus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $KmsKeyIdentifier
 * @property string $Description
 * @property Shapes\DeadLetterConfig $DeadLetterConfig
 */
class UpdateEventBusRequest extends Request
{
    /**
     * @param array{
     *     Name?: string,
     *     KmsKeyIdentifier?: string,
     *     Description?: string,
     *     DeadLetterConfig?: Shapes\DeadLetterConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
