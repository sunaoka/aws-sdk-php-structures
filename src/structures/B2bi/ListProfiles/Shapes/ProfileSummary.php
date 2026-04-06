<?php

namespace Sunaoka\Aws\Structures\B2bi\ListProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $profileId
 * @property string $name
 * @property string $businessName
 * @property 'ENABLED'|'DISABLED'|null $logging
 * @property string|null $logGroupName
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $modifiedAt
 */
class ProfileSummary extends Shape
{
    /**
     * @param array{
     *     profileId: string,
     *     name: string,
     *     businessName: string,
     *     logging?: 'ENABLED'|'DISABLED'|null,
     *     logGroupName?: string|null,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     modifiedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
