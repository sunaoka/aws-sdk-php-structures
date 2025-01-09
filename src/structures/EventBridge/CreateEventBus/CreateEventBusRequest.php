<?php

namespace Sunaoka\Aws\Structures\EventBridge\CreateEventBus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $EventSourceName
 * @property string $Description
 * @property string $KmsKeyIdentifier
 * @property Shapes\DeadLetterConfig $DeadLetterConfig
 * @property list<Shapes\Tag> $Tags
 */
class CreateEventBusRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EventSourceName?: string,
     *     Description?: string,
     *     KmsKeyIdentifier?: string,
     *     DeadLetterConfig?: Shapes\DeadLetterConfig,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
