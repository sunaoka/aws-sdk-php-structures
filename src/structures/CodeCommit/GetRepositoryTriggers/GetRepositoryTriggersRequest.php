<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetRepositoryTriggers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 */
class GetRepositoryTriggersRequest extends Request
{
    /**
     * @param array{repositoryName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
