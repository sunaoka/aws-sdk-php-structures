<?php

namespace Sunaoka\Aws\Structures\SupportApp\RegisterSlackWorkspaceForOrganization;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $teamId
 */
class RegisterSlackWorkspaceForOrganizationRequest extends Request
{
    /**
     * @param array{teamId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
