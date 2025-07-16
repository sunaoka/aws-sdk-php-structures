<?php

namespace Sunaoka\Aws\Structures\EventBridge\UpdateEventBus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $Name
 * @property string|null $KmsKeyIdentifier
 * @property string|null $Description
 * @property Shapes\DeadLetterConfig|null $DeadLetterConfig
 * @property Shapes\LogConfig|null $LogConfig
 */
class UpdateEventBusRequest extends Request
{
    /**
     * @param array{
     *     Name?: string|null,
     *     KmsKeyIdentifier?: string|null,
     *     Description?: string|null,
     *     DeadLetterConfig?: Shapes\DeadLetterConfig|null,
     *     LogConfig?: Shapes\LogConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
