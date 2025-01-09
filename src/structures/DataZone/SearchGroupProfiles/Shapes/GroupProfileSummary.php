<?php

namespace Sunaoka\Aws\Structures\DataZone\SearchGroupProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $domainId
 * @property string $groupName
 * @property string $id
 * @property 'ASSIGNED'|'NOT_ASSIGNED' $status
 */
class GroupProfileSummary extends Shape
{
    /**
     * @param array{
     *     domainId?: string,
     *     groupName?: string,
     *     id?: string,
     *     status?: 'ASSIGNED'|'NOT_ASSIGNED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
