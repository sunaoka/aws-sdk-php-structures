<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreateEventBus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $EventSourceName
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateEventBusRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EventSourceName?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
