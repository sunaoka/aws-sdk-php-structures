<?php

namespace Sunaoka\Aws\Structures\Inspector\ListExclusions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentRunArn
 * @property string $nextToken
 * @property int $maxResults
 */
class ListExclusionsRequest extends Request
{
    /**
     * @param array{
     *     assessmentRunArn: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
