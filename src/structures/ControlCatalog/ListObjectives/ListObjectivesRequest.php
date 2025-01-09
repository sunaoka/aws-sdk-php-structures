<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListObjectives;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property Shapes\ObjectiveFilter $ObjectiveFilter
 */
class ListObjectivesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     ObjectiveFilter?: Shapes\ObjectiveFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
