<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchGroupProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $domainId
 * @property string|null $groupName
 * @property string|null $id
 * @property 'ASSIGNED'|'NOT_ASSIGNED'|null $status
 */
class GroupProfileSummary extends Shape
{
    /**
     * @param array{
     *     domainId?: string|null,
     *     groupName?: string|null,
     *     id?: string|null,
     *     status?: 'ASSIGNED'|'NOT_ASSIGNED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
