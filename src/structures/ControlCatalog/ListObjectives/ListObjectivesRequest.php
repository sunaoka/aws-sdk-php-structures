<?php

namespace Sunaoka\Aws\Structures\ControlCatalog\ListObjectives;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\ObjectiveFilter|null $ObjectiveFilter
 */
class ListObjectivesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     ObjectiveFilter?: Shapes\ObjectiveFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
