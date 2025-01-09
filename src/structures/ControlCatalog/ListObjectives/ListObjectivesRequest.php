<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListObjectives;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property Shapes\ObjectiveFilter $ObjectiveFilter
 */
class ListObjectivesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ObjectiveFilter?: Shapes\ObjectiveFilter
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
