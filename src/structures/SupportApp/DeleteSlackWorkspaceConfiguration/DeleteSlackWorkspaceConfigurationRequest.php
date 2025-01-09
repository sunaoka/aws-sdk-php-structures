<?php

namespace Sunaoka\Aws\Structures\SupportApp\DeleteSlackWorkspaceConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $teamId
 */
class DeleteSlackWorkspaceConfigurationRequest extends Request
{
    /**
     * @param array{teamId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
