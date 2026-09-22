<?php

namespace Sunaoka\Aws\Structures\CloudWatchOmni\UpdateAccessProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $profileId
 * @property string $spaceId
 * @property string $arn
 * @property string $name
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property 'ALLOWED'|'DENIED'|null $assumeStatus
 * @property 'SERVICE_MANAGED'|'CUSTOMER_MANAGED'|null $profileType
 */
class AccessProfile extends Shape
{
    /**
     * @param array{
     *     profileId: string,
     *     spaceId: string,
     *     arn: string,
     *     name: string,
     *     description?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult,
     *     assumeStatus?: 'ALLOWED'|'DENIED'|null,
     *     profileType?: 'SERVICE_MANAGED'|'CUSTOMER_MANAGED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
