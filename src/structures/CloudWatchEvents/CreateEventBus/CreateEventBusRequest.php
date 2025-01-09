<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\CreateEventBus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $EventSourceName
 * @property list<Shapes\Tag> $Tags
 */
class CreateEventBusRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     EventSourceName?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
