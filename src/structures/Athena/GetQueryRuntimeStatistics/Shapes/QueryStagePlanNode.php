<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryRuntimeStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Identifier
 * @property list<QueryStagePlanNode>|null $Children
 * @property list<string>|null $RemoteSources
 */
class QueryStagePlanNode extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Identifier?: string|null,
     *     Children?: list<QueryStagePlanNode>|null,
     *     RemoteSources?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
