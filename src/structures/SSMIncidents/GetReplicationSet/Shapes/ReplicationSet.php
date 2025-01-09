<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetReplicationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $createdBy
 * @property \Aws\Api\DateTimeResult $createdTime
 * @property bool $deletionProtected
 * @property string $lastModifiedBy
 * @property \Aws\Api\DateTimeResult $lastModifiedTime
 * @property array<string, RegionInfo> $regionMap
 * @property 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'FAILED' $status
 */
class ReplicationSet extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     createdBy: string,
     *     createdTime: \Aws\Api\DateTimeResult,
     *     deletionProtected: bool,
     *     lastModifiedBy: string,
     *     lastModifiedTime: \Aws\Api\DateTimeResult,
     *     regionMap: array<string, RegionInfo>,
     *     status: 'ACTIVE'|'CREATING'|'UPDATING'|'DELETING'|'FAILED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
