<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGatewayRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bundleArn
 * @property string $bundleVersion
 */
class ConfigurationBundleReference extends Shape
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
