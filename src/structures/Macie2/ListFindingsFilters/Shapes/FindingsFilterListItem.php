<?php

namespace Sunaoka\Aws\Structures\Macie2\ListFindingsFilters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ARCHIVE'|'NOOP' $action
 * @property string $arn
 * @property string $id
 * @property string $name
 * @property array<string, string> $tags
 */
class FindingsFilterListItem extends Shape
{
    /**
     * @param array{
     *     action?: 'ARCHIVE'|'NOOP',
     *     arn?: string,
     *     id?: string,
     *     name?: string,
     *     tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
