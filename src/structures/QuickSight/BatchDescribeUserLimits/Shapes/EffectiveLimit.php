<?php

namespace Sunaoka\Aws\Structures\QuickSight\BatchDescribeUserLimits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INDEX_STORAGE'|'AGENT_HOURS' $resourceType
 * @property int<0, max> $limitValue
 * @property 'MB'|'GB'|'HOURS'|'DAYS' $limitUnit
 * @property 'DIRECT_USER'|'GROUP'|'ROLE'|'ACCOUNT'|'SYSTEM_DEFAULT' $source
 * @property string $profileId
 */
class EffectiveLimit extends Shape
{
    /**
     * @param array{
     *     resourceType: 'INDEX_STORAGE'|'AGENT_HOURS',
     *     limitValue: int<0, max>,
     *     limitUnit: 'MB'|'GB'|'HOURS'|'DAYS',
     *     source: 'DIRECT_USER'|'GROUP'|'ROLE'|'ACCOUNT'|'SYSTEM_DEFAULT',
     *     profileId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
