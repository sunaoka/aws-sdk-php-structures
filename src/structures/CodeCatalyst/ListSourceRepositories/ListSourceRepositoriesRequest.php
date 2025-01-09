<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListSourceRepositories;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property string $nextToken
 * @property int<1, 200> $maxResults
 */
class ListSourceRepositoriesRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 200>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
