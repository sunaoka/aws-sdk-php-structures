<?php

namespace Sunaoka\Aws\Structures\EndUserMessaging\ListBrandProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $brandProfileId
 * @property string $brandProfileArn
 * @property string $brandProfileName
 * @property 'ACTIVE'|'BLOCKED'|'PAUSED'|'CANCELLED'|'FAILED' $status
 * @property bool $deletionProtectionEnabled
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class BrandProfileInfo extends Shape
{
    /**
     * @param array{
     *     brandProfileId: string,
     *     brandProfileArn: string,
     *     brandProfileName: string,
     *     status: 'ACTIVE'|'BLOCKED'|'PAUSED'|'CANCELLED'|'FAILED',
     *     deletionProtectionEnabled: bool,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
