<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\CreateGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MatchPrincipals|null $matchPrincipals
 * @property MatchPaths|null $matchPaths
 * @property MatchModels|null $matchModels
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     matchPrincipals?: MatchPrincipals|null,
     *     matchPaths?: MatchPaths|null,
     *     matchModels?: MatchModels|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
