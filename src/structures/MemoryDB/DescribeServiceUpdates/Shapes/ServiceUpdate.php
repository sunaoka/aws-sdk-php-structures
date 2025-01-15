<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeServiceUpdates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ClusterName
 * @property string|null $ServiceUpdateName
 * @property \Aws\Api\DateTimeResult|null $ReleaseDate
 * @property string|null $Description
 * @property 'available'|'in-progress'|'complete'|'scheduled'|null $Status
 * @property 'security-update'|null $Type
 * @property string|null $Engine
 * @property string|null $NodesUpdated
 * @property \Aws\Api\DateTimeResult|null $AutoUpdateStartDate
 */
class ServiceUpdate extends Shape
{
    /**
     * @param array{
     *     ClusterName?: string|null,
     *     ServiceUpdateName?: string|null,
     *     ReleaseDate?: \Aws\Api\DateTimeResult|null,
     *     Description?: string|null,
     *     Status?: 'available'|'in-progress'|'complete'|'scheduled'|null,
     *     Type?: 'security-update'|null,
     *     Engine?: string|null,
     *     NodesUpdated?: string|null,
     *     AutoUpdateStartDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
