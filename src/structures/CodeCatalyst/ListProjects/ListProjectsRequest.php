<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 * @property list<Shapes\ProjectListFilter> $filters
 */
class ListProjectsRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>,
     *     filters?: list<Shapes\ProjectListFilter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
