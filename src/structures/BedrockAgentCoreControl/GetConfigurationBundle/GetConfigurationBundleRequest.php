<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetConfigurationBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bundleId
 * @property string|null $branchName
 */
class GetConfigurationBundleRequest extends Request
{
    /**
     * @param array{
     *     bundleId: string,
     *     branchName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
