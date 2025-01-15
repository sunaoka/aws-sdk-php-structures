<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $L1Ids
 * @property list<string>|null $L2Ids
 * @property list<string>|null $L3Ids
 * @property list<string>|null $L4Ids
 * @property list<string>|null $L5Ids
 */
class AgentHierarchyGroups extends Shape
{
    /**
     * @param array{
     *     L1Ids?: list<string>|null,
     *     L2Ids?: list<string>|null,
     *     L3Ids?: list<string>|null,
     *     L4Ids?: list<string>|null,
     *     L5Ids?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
