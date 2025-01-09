<?php

namespace Sunaoka\Aws\Structures\MailManager\GetArchiveExport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ArchiveFilterCondition> $Include
 * @property list<ArchiveFilterCondition> $Unless
 */
class ArchiveFilters extends Shape
{
    /**
     * @param array{
     *     Include?: list<ArchiveFilterCondition>,
     *     Unless?: list<ArchiveFilterCondition>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
