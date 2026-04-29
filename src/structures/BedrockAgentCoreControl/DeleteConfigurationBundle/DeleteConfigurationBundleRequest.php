<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteConfigurationBundle;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $bundleId
 */
class DeleteConfigurationBundleRequest extends Request
{
    /**
     * @param array{bundleId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
