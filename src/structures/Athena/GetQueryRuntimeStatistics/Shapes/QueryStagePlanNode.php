<?php

namespace Sunaoka\Aws\Structures\Athena\GetQueryRuntimeStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Identifier
 * @property list<QueryStagePlanNode> $Children
 * @property list<string> $RemoteSources
 */
class QueryStagePlanNode extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Identifier?: string,
     *     Children?: list<QueryStagePlanNode>,
     *     RemoteSources?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
