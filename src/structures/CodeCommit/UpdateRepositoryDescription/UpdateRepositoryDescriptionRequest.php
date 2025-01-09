<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateRepositoryDescription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string $repositoryDescription
 */
class UpdateRepositoryDescriptionRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     repositoryDescription?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
