<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MatchModelEntry> $anyOf
 */
class MatchModels extends Shape
{
    /**
     * @param array{anyOf: list<MatchModelEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
