<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\SynchronizeGatewayTargets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $strip
 * @property string|null $separator
 */
class ProviderPrefix extends Shape
{
    /**
     * @param array{
     *     strip?: bool|null,
     *     separator?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
