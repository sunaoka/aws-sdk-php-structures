<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DescribeServiceUpdates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterName
 * @property string $ServiceUpdateName
 * @property \Aws\Api\DateTimeResult $ReleaseDate
 * @property string $Description
 * @property 'available'|'in-progress'|'complete'|'scheduled' $Status
 * @property 'security-update' $Type
 * @property string $Engine
 * @property string $NodesUpdated
 * @property \Aws\Api\DateTimeResult $AutoUpdateStartDate
 */
class ServiceUpdate extends Shape
{
    /**
     * @param array{
     *     ClusterName?: string,
     *     ServiceUpdateName?: string,
     *     ReleaseDate?: \Aws\Api\DateTimeResult,
     *     Description?: string,
     *     Status?: 'available'|'in-progress'|'complete'|'scheduled',
     *     Type?: 'security-update',
     *     Engine?: string,
     *     NodesUpdated?: string,
     *     AutoUpdateStartDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
