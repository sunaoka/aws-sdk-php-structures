<?php

namespace Sunaoka\Aws\Structures\Ecr\BatchGetRepositoryScanningConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $repositoryNames
 */
class BatchGetRepositoryScanningConfigurationRequest extends Request
{
    /**
     * @param array{repositoryNames: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
