<?php

namespace Sunaoka\Aws\Structures\QLDB\ListLedgers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED' $State
 * @property \Aws\Api\DateTimeResult $CreationDateTime
 */
class LedgerSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     State?: 'CREATING'|'ACTIVE'|'DELETING'|'DELETED',
     *     CreationDateTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
