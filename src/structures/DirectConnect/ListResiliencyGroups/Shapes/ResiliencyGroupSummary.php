<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ListResiliencyGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $resiliencyGroupId
 * @property string|null $resiliencyGroupArn
 * @property string|null $resiliencyGroupName
 * @property 'Managed'|null $resiliencyGroupType
 * @property string|null $ownerAccount
 * @property 'pending'|'available'|'deleting'|'deleted'|null $state
 */
class ResiliencyGroupSummary extends Shape
{
    /**
     * @param array{
     *     resiliencyGroupId?: string|null,
     *     resiliencyGroupArn?: string|null,
     *     resiliencyGroupName?: string|null,
     *     resiliencyGroupType?: 'Managed'|null,
     *     ownerAccount?: string|null,
     *     state?: 'pending'|'available'|'deleting'|'deleted'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
