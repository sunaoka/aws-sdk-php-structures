<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\PutRawEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ContentType
 * @property string|null $DeduplicationId
 * @property string|null $EventGroupId
 */
class PutRawEventsSystemMetadata extends Shape
{
    /**
     * @param array{
     *     ContentType: string,
     *     DeduplicationId?: string|null,
     *     EventGroupId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
