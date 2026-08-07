<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCapacityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $subnets
 * @property list<string> $securityGroups
 */
class VpcConfiguration extends Shape
{
    /**
     * @param array{
     *     subnets: list<string>,
     *     securityGroups: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
