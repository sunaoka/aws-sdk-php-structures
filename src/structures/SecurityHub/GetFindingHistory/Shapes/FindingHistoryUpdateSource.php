<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindingHistory\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'BATCH_UPDATE_FINDINGS'|'BATCH_IMPORT_FINDINGS' $Type
 * @property string $Identity
 */
class FindingHistoryUpdateSource extends Shape
{
    /**
     * @param array{
     *     Type?: 'BATCH_UPDATE_FINDINGS'|'BATCH_IMPORT_FINDINGS',
     *     Identity?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
