<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateEventBus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $EventSourceName
 * @property string|null $Description
 * @property string|null $KmsKeyIdentifier
 * @property Shapes\DeadLetterConfig|null $DeadLetterConfig
 * @property Shapes\LogConfig|null $LogConfig
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateEventBusRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EventSourceName?: string|null,
     *     Description?: string|null,
     *     KmsKeyIdentifier?: string|null,
     *     DeadLetterConfig?: Shapes\DeadLetterConfig|null,
     *     LogConfig?: Shapes\LogConfig|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
