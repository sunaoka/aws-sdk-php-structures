<?php

namespace Sunaoka\Aws\Structures\CodeCommit\GetRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 */
class GetRepositoryRequest extends Request
{
    /**
     * @param array{repositoryName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
