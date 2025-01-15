<?php

namespace Sunaoka\Aws\Structures\SSMQuickSetup\UpdateServiceSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ExplorerEnablingRoleArn
 */
class UpdateServiceSettingsRequest extends Request
{
    /**
     * @param array{ExplorerEnablingRoleArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
