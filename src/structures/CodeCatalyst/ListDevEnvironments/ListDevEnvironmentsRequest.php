<?php

namespace Sunaoka\Aws\Structures\CodeCatalyst\ListDevEnvironments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spaceName
 * @property string|null $projectName
 * @property list<Shapes\Filter>|null $filters
 * @property string|null $nextToken
 * @property int<1, 50>|null $maxResults
 */
class ListDevEnvironmentsRequest extends Request
{
    /**
     * @param array{
     *     spaceName: string,
     *     projectName?: string|null,
     *     filters?: list<Shapes\Filter>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 50>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
