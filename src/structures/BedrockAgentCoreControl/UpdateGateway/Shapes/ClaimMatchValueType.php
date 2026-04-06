<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\UpdateGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $matchValueString
 * @property list<string>|null $matchValueStringList
 */
class ClaimMatchValueType extends Shape
{
    /**
     * @param array{
     *     matchValueString?: string|null,
     *     matchValueStringList?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
