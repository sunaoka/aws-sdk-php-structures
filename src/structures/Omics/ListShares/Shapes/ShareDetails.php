<?php

namespace Sunaoka\Aws\Structures\Omics\ListShares\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $shareId
 * @property string|null $resourceArn
 * @property string|null $resourceId
 * @property string|null $principalSubscriber
 * @property string|null $ownerId
 * @property 'PENDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED'|null $status
 * @property string|null $statusMessage
 * @property string|null $shareName
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property \Aws\Api\DateTimeResult|null $updateTime
 */
class ShareDetails extends Shape
{
    /**
     * @param array{
     *     shareId?: string|null,
     *     resourceArn?: string|null,
     *     resourceId?: string|null,
     *     principalSubscriber?: string|null,
     *     ownerId?: string|null,
     *     status?: 'PENDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED'|null,
     *     statusMessage?: string|null,
     *     shareName?: string|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     updateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
