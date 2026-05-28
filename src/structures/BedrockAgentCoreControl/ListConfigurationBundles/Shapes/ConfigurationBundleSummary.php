<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\ListConfigurationBundles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bundleArn
 * @property string $bundleId
 * @property string $bundleName
 * @property string|null $description
 * @property \Aws\Api\DateTimeResult|null $createdAt
 */
class ConfigurationBundleSummary extends Shape
{
    /**
     * @param array{
     *     bundleArn: string,
     *     bundleId: string,
     *     bundleName: string,
     *     description?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
