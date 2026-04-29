<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListGatewayRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bundleArn
 * @property string $bundleVersion
 */
class StaticOverride extends Shape
{
    /**
     * @param array{
     *     bundleArn: string,
     *     bundleVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
