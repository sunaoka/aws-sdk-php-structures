<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListOnlineEvaluationConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'DAILY'|'WEEKLY'|'MONTHLY'> $frequencies
 */
class ClusteringConfig extends Shape
{
    /**
     * @param array{frequencies: list<'DAILY'|'WEEKLY'|'MONTHLY'>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
