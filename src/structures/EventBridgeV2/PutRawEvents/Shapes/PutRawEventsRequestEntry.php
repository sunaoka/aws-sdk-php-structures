<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\PutRawEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|resource|\Psr\Http\Message\StreamInterface $Data
 * @property array<string, string>|null $Metadata
 * @property PutRawEventsSystemMetadata $SystemMetadata
 */
class PutRawEventsRequestEntry extends Shape
{
    /**
     * @param array{
     *     Data: string|resource|\Psr\Http\Message\StreamInterface,
     *     Metadata?: array<string, string>|null,
     *     SystemMetadata: PutRawEventsSystemMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
