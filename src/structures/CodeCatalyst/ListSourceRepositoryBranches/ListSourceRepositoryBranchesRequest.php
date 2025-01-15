<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListSourceRepositoryBranches;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $sourceRepositoryName
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListSourceRepositoryBranchesRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     sourceRepositoryName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
