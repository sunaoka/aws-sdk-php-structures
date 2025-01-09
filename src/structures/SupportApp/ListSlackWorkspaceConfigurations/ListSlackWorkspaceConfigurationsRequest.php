<?php

namespace Sunaoka\Aws\Structures\SupportApp\ListSlackWorkspaceConfigurations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 */
class ListSlackWorkspaceConfigurationsRequest extends Request
{
    /**
     * @param array{nextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
