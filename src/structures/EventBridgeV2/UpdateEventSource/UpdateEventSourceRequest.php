<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateEventSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EventSourceArn
 * @property Shapes\EventSourceConfiguration|null $Configuration
 * @property string|null $Description
 */
class UpdateEventSourceRequest extends Request
{
    /**
     * @param array{
     *     EventSourceArn: string,
     *     Configuration?: Shapes\EventSourceConfiguration|null,
     *     Description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
