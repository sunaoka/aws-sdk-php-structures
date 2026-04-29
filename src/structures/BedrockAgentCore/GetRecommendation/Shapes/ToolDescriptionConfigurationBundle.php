<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\GetRecommendation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bundleArn
 * @property string $versionId
 * @property list<ConfigurationBundleToolEntry> $tools
 */
class ToolDescriptionConfigurationBundle extends Shape
{
    /**
     * @param array{
     *     bundleArn: string,
     *     versionId: string,
     *     tools: list<ConfigurationBundleToolEntry>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
