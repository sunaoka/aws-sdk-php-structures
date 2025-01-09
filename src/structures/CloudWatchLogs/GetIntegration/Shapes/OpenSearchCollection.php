<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $collectionEndpoint
 * @property string $collectionArn
 * @property OpenSearchResourceStatus $status
 */
class OpenSearchCollection extends Shape
{
    /**
     * @param array{
     *     collectionEndpoint?: string,
     *     collectionArn?: string,
     *     status?: OpenSearchResourceStatus
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
