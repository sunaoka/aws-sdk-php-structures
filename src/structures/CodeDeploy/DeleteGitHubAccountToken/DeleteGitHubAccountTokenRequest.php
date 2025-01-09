<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\DeleteGitHubAccountToken;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tokenName
 */
class DeleteGitHubAccountTokenRequest extends Request
{
    /**
     * @param array{tokenName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
