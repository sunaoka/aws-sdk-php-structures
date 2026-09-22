<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\ListSpacesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $spaceId
 * @property string $name
 * @property string $spaceArn
 * @property string|null $domainArn
 * @property string $region
 * @property string $ownerAccountId
 * @property 'ACTIVE'|'SUSPENDED'|'MOVING' $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class SpaceSummary extends Shape
{
    /**
     * @param array{
     *     spaceId: string,
     *     name: string,
     *     spaceArn: string,
     *     domainArn?: string|null,
     *     region: string,
     *     ownerAccountId: string,
     *     status: 'ACTIVE'|'SUSPENDED'|'MOVING',
     *     statusReason?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
