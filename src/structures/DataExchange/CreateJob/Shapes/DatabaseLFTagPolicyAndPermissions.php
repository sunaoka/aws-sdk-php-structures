<?php

namespace Sunaoka\Aws\Structures\DataExchange\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<LFTag> $Expression
 * @property list<'DESCRIBE'> $Permissions
 */
class DatabaseLFTagPolicyAndPermissions extends Shape
{
    /**
     * @param array{
     *     Expression: list<LFTag>,
     *     Permissions: list<'DESCRIBE'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
