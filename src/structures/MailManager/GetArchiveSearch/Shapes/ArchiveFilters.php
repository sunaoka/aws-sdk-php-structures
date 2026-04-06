<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ArchiveFilterCondition>|null $Include
 * @property list<ArchiveFilterCondition>|null $Unless
 */
class ArchiveFilters extends Shape
{
    /**
     * @param array{
     *     Include?: list<ArchiveFilterCondition>|null,
     *     Unless?: list<ArchiveFilterCondition>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
