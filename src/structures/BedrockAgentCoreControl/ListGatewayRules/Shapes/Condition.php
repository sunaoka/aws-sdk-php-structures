<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MatchPrincipals|null $matchPrincipals
 * @property MatchPaths|null $matchPaths
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     matchPrincipals?: MatchPrincipals|null,
     *     matchPaths?: MatchPaths|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
