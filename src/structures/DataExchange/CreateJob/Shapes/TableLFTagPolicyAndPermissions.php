<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LFTag> $Expression
 * @property list<'DESCRIBE'|'SELECT'> $Permissions
 */
class TableLFTagPolicyAndPermissions extends Shape
{
    /**
     * @param array{
     *     Expression: list<LFTag>,
     *     Permissions: list<'DESCRIBE'|'SELECT'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
