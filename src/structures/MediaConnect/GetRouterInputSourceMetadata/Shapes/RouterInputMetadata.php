<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInputSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property TransportMediaInfo|null $TransportStreamMediaInfo
 * @property RtmpSourceMetadataInfo|null $RtmpInfo
 */
class RouterInputMetadata extends Shape
{
    /**
     * @param array{
     *     TransportStreamMediaInfo?: TransportMediaInfo|null,
     *     RtmpInfo?: RtmpSourceMetadataInfo|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
