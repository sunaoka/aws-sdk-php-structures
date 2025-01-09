<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DbShardGroupIdentifier
 * @property string $DbShardGroupResourceId
 * @property string $DbShardGroupArn
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $DbClusterIdentifier
 * @property list<Tag> $Tags
 */
class RdsLimitlessDbDetails extends Shape
{
    /**
     * @param array{
     *     DbShardGroupIdentifier?: string,
     *     DbShardGroupResourceId?: string,
     *     DbShardGroupArn?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     DbClusterIdentifier?: string,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
