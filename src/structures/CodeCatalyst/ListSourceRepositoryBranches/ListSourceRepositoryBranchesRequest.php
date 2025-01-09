<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListSourceRepositoryBranches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $sourceRepositoryName
 * @property string $nextToken
 * @property int $maxResults
 */
class ListSourceRepositoryBranchesRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     sourceRepositoryName: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
