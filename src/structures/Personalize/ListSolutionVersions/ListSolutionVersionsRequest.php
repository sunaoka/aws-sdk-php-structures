<?php

namespace Sunaoka\Aws\Structures\Personalize\ListSolutionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $solutionArn
 * @property string $nextToken
 * @property int $maxResults
 */
class ListSolutionVersionsRequest extends Request
{
    /**
     * @param array{
     *     solutionArn?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
