<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\InvokeWebSearch\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $include
 * @property list<string>|null $exclude
 */
class DomainFilter extends Shape
{
    /**
     * @param array{
     *     include?: list<string>|null,
     *     exclude?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
