<?php

namespace Sunaoka\Aws\Structures\OpenSearchService\DescribeDryRunProgress\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'coordinator' $NodeType
 * @property NodeConfig $NodeConfig
 */
class NodeOption extends Shape
{
    /**
     * @param array{
     *     NodeType?: 'coordinator',
     *     NodeConfig?: NodeConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
