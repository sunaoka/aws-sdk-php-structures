<?php

namespace Sunaoka\Aws\Structures\Athena\ListSystemTableStatuses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'QUERY_EXECUTIONS' $TableName
 * @property bool $Enabled
 */
class SystemTableStatus extends Shape
{
    /**
     * @param array{
     *     TableName: 'QUERY_EXECUTIONS',
     *     Enabled: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
