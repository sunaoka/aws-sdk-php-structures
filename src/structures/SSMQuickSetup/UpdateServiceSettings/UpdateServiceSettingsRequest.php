<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\UpdateServiceSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ExplorerEnablingRoleArn
 */
class UpdateServiceSettingsRequest extends Request
{
    /**
     * @param array{ExplorerEnablingRoleArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
