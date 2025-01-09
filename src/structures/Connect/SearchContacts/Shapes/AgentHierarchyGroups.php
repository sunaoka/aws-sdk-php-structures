<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $L1Ids
 * @property list<string> $L2Ids
 * @property list<string> $L3Ids
 * @property list<string> $L4Ids
 * @property list<string> $L5Ids
 */
class AgentHierarchyGroups extends Shape
{
    /**
     * @param array{
     *     L1Ids?: list<string>,
     *     L2Ids?: list<string>,
     *     L3Ids?: list<string>,
     *     L4Ids?: list<string>,
     *     L5Ids?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
