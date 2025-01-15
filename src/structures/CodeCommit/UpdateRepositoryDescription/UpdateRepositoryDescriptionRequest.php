<?php

namespace Sunaoka\Aws\Structures\CodeCommit\UpdateRepositoryDescription;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $repositoryName
 * @property string|null $repositoryDescription
 */
class UpdateRepositoryDescriptionRequest extends Request
{
    /**
     * @param array{
     *     repositoryName: string,
     *     repositoryDescription?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
