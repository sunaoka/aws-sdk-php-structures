<?php

namespace Sunaoka\Aws\Structures\RAM\ListSourceAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resourceShareArn
 * @property string|null $sourceId
 * @property string|null $sourceType
 * @property string|null $status
 * @property \Aws\Api\DateTimeResult|null $lastUpdatedTime
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $statusMessage
 */
class AssociatedSource extends Shape
{
    /**
     * @param array{
     *     resourceShareArn?: string|null,
     *     sourceId?: string|null,
     *     sourceType?: string|null,
     *     status?: string|null,
     *     lastUpdatedTime?: \Aws\Api\DateTimeResult|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     statusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
