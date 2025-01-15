<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListSourceRepositories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string|null $nextToken
 * @property int<1, 200>|null $maxResults
 */
class ListSourceRepositoriesRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 200>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
