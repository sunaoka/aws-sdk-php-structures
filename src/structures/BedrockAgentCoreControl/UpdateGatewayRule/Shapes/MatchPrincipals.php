<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<MatchPrincipalEntry> $anyOf
 */
class MatchPrincipals extends Shape
{
    /**
     * @param array{anyOf: list<MatchPrincipalEntry>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
