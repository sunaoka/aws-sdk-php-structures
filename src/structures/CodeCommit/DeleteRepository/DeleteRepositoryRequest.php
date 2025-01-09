<?php

namespace Sunaoka\Aws\Structures\CodeCommit\DeleteRepository;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 */
class DeleteRepositoryRequest extends Request
{
    /**
     * @param array{repositoryName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
