<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 * @property list<Shapes\ProjectListFilter>|null $filters
 */
class ListProjectsRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     filters?: list<Shapes\ProjectListFilter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
