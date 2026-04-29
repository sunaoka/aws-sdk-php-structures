<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\UpdateABTest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bundleArn
 * @property string $bundleVersion
 */
class ConfigurationBundleRef extends Shape
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
