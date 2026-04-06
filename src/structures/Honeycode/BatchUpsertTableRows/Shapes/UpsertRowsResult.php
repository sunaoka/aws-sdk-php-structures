<?php

namespace Sunaoka\Aws\Structures\Honeycode\BatchUpsertTableRows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $rowIds
 * @property 'UPDATED'|'APPENDED' $upsertAction
 */
class UpsertRowsResult extends Shape
{
    /**
     * @param array{
     *     rowIds: list<string>,
     *     upsertAction: 'UPDATED'|'APPENDED'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
