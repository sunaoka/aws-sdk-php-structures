<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property IamPrincipal|null $iamPrincipal
 */
class MatchPrincipalEntry extends Shape
{
    /**
     * @param array{iamPrincipal?: IamPrincipal|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
