<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchGroupProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainId
 * @property string|null $id
 * @property 'ASSIGNED'|'NOT_ASSIGNED'|null $status
 * @property string|null $groupName
 */
class GroupProfileSummary extends Shape
{
    /**
     * @param array{
     *     domainId?: string|null,
     *     id?: string|null,
     *     status?: 'ASSIGNED'|'NOT_ASSIGNED'|null,
     *     groupName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
