<?php

namespace Sunaoka\Aws\Structures\Inspector\ListExclusions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assessmentRunArn
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListExclusionsRequest extends Request
{
    /**
     * @param array{
     *     assessmentRunArn: string,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
