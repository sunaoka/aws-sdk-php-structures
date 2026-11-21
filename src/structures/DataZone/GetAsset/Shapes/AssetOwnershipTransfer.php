<?php

namespace Sunaoka\Aws\Structures\DataZone\GetAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'IN_PROGRESS'|'SUCCEEDED'|'FAILED' $status
 * @property string $sourceProjectId
 * @property string $targetProjectId
 * @property \Aws\Api\DateTimeResult|null $startedAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class AssetOwnershipTransfer extends Shape
{
    /**
     * @param array{
     *     status: 'IN_PROGRESS'|'SUCCEEDED'|'FAILED',
     *     sourceProjectId: string,
     *     targetProjectId: string,
     *     startedAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
