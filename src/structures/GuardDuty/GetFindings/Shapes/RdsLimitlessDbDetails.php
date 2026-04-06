<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DbShardGroupIdentifier
 * @property string|null $DbShardGroupResourceId
 * @property string|null $DbShardGroupArn
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $DbClusterIdentifier
 * @property list<Tag>|null $Tags
 */
class RdsLimitlessDbDetails extends Shape
{
    /**
     * @param array{
     *     DbShardGroupIdentifier?: string|null,
     *     DbShardGroupResourceId?: string|null,
     *     DbShardGroupArn?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     DbClusterIdentifier?: string|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
