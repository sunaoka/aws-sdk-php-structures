<?php

namespace Sunaoka\Aws\Structures\Omics\GetShare\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $shareId
 * @property string $resourceArn
 * @property string $resourceId
 * @property string $principalSubscriber
 * @property string $ownerId
 * @property 'PENDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED' $status
 * @property string $statusMessage
 * @property string $shareName
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property \Aws\Api\DateTimeResult $updateTime
 */
class ShareDetails extends Shape
{
    /**
     * @param array{
     *     shareId?: string,
     *     resourceArn?: string,
     *     resourceId?: string,
     *     principalSubscriber?: string,
     *     ownerId?: string,
     *     status?: 'PENDING'|'ACTIVATING'|'ACTIVE'|'DELETING'|'DELETED'|'FAILED',
     *     statusMessage?: string,
     *     shareName?: string,
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     updateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
