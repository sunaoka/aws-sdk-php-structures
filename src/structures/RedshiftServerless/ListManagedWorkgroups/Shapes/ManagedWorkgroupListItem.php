<?php

namespace Sunaoka\Aws\Structures\RedshiftServerless\ListManagedWorkgroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $creationDate
 * @property string|null $managedWorkgroupId
 * @property string|null $managedWorkgroupName
 * @property string|null $sourceArn
 * @property 'CREATING'|'DELETING'|'MODIFYING'|'AVAILABLE'|'NOT_AVAILABLE'|null $status
 */
class ManagedWorkgroupListItem extends Shape
{
    /**
     * @param array{
     *     creationDate?: \Aws\Api\DateTimeResult|null,
     *     managedWorkgroupId?: string|null,
     *     managedWorkgroupName?: string|null,
     *     sourceArn?: string|null,
     *     status?: 'CREATING'|'DELETING'|'MODIFYING'|'AVAILABLE'|'NOT_AVAILABLE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
