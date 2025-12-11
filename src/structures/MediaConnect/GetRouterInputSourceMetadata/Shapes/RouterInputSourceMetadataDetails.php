<?php

namespace Sunaoka\Aws\Structures\MediaConnect\GetRouterInputSourceMetadata\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RouterInputMessage> $SourceMetadataMessages
 * @property \Aws\Api\DateTimeResult $Timestamp
 * @property RouterInputMetadata|null $RouterInputMetadata
 */
class RouterInputSourceMetadataDetails extends Shape
{
    /**
     * @param array{
     *     SourceMetadataMessages: list<RouterInputMessage>,
     *     Timestamp: \Aws\Api\DateTimeResult,
     *     RouterInputMetadata?: RouterInputMetadata|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
