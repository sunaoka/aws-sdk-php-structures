<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\DeleteGitHubAccountToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $tokenName
 */
class DeleteGitHubAccountTokenRequest extends Request
{
    /**
     * @param array{tokenName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
