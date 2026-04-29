<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'StringEquals'|'StringLike'|null $operator
 */
class IamPrincipal extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     operator?: 'StringEquals'|'StringLike'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
