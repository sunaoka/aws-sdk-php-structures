<?php

namespace Sunaoka\Aws\Structures\QuickSight\ListLimitsProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $profileId
 * @property string $arn
 * @property string $accountId
 * @property string $profileName
 * @property string|null $description
 * @property array<'INDEX_STORAGE'|'AGENT_HOURS', ProfileLimitValue> $resourceLimits
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class LimitsProfile extends Shape
{
    /**
     * @param array{
     *     profileId: string,
     *     arn: string,
     *     accountId: string,
     *     profileName: string,
     *     description?: string|null,
     *     resourceLimits: array<'INDEX_STORAGE'|'AGENT_HOURS', ProfileLimitValue>,
     *     createdAt: \Aws\Api\DateTimeResult,
     *     updatedAt: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
