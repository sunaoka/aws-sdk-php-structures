<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\CreateSourceRepositoryBranch;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $sourceRepositoryName
 * @property string $name
 * @property string $headCommitId
 */
class CreateSourceRepositoryBranchRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     sourceRepositoryName: string,
     *     name: string,
     *     headCommitId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
