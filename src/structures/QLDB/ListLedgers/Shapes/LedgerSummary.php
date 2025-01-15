<?php

namespace Sunaoka\Aws\Structures\QLDB\ListLedgers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|null $State
 * @property \Aws\Api\DateTimeResult|null $CreationDateTime
 */
class LedgerSummary extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     State?: 'CREATING'|'ACTIVE'|'DELETING'|'DELETED'|null,
     *     CreationDateTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
