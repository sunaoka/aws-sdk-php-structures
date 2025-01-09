<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListDevEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string $projectName
 * @property list<Shapes\Filter> $filters
 * @property string $nextToken
 * @property int<1, 50> $maxResults
 */
class ListDevEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName?: string,
     *     filters?: list<Shapes\Filter>,
     *     nextToken?: string,
     *     maxResults?: int<1, 50>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
