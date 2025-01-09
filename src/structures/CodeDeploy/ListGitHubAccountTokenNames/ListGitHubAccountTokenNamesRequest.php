<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListGitHubAccountTokenNames;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 */
class ListGitHubAccountTokenNamesRequest extends Request
{
    /**
     * @param array{nextToken?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
