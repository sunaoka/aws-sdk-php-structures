<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListWorkflowExecutions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 25>|null $maxResults
 * @property string|null $nextToken
 * @property string $imageBuildVersionArn
 */
class ListWorkflowExecutionsRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 25>|null,
     *     nextToken?: string|null,
     *     imageBuildVersionArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
