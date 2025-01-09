<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListManagedWorkgroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $creationDate
 * @property string $managedWorkgroupId
 * @property string $managedWorkgroupName
 * @property string $sourceArn
 * @property 'CREATING'|'DELETING'|'MODIFYING'|'AVAILABLE'|'NOT_AVAILABLE' $status
 */
class ManagedWorkgroupListItem extends Shape
{
    /**
     * @param array{
     *     creationDate?: \Aws\Api\DateTimeResult,
     *     managedWorkgroupId?: string,
     *     managedWorkgroupName?: string,
     *     sourceArn?: string,
     *     status?: 'CREATING'|'DELETING'|'MODIFYING'|'AVAILABLE'|'NOT_AVAILABLE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
