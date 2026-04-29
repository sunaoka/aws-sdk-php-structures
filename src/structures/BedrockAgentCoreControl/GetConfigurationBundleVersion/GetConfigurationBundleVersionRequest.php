<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetConfigurationBundleVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bundleId
 * @property string $versionId
 */
class GetConfigurationBundleVersionRequest extends Request
{
    /**
     * @param array{
     *     bundleId: string,
     *     versionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
