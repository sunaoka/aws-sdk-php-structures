<?php

namespace Sunaoka\Aws\Structures\Personalize\ListSolutionVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $solutionArn
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListSolutionVersionsRequest extends Request
{
    /**
     * @param array{
     *     solutionArn?: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
