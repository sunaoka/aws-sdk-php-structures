<?php

namespace Sunaoka\Aws\Structures\Textract\ListProjects;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, max>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\BlueprintFilter|null $BlueprintFilter
 */
class ListProjectsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, max>|null,
     *     NextToken?: string|null,
     *     BlueprintFilter?: Shapes\BlueprintFilter|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
