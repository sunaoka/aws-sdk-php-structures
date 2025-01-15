<?php

namespace Sunaoka\Aws\Structures\Macie2\ListFindingsFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ARCHIVE'|'NOOP'|null $action
 * @property string|null $arn
 * @property string|null $id
 * @property string|null $name
 * @property array<string, string>|null $tags
 */
class FindingsFilterListItem extends Shape
{
    /**
     * @param array{
     *     action?: 'ARCHIVE'|'NOOP'|null,
     *     arn?: string|null,
     *     id?: string|null,
     *     name?: string|null,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
