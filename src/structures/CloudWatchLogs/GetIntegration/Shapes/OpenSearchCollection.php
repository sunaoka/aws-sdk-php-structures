<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $collectionEndpoint
 * @property string|null $collectionArn
 * @property OpenSearchResourceStatus|null $status
 */
class OpenSearchCollection extends Shape
{
    /**
     * @param array{
     *     collectionEndpoint?: string|null,
     *     collectionArn?: string|null,
     *     status?: OpenSearchResourceStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
