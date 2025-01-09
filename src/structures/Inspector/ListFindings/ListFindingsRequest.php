<?php

namespace Sunaoka\Aws\Structures\Inspector\ListFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $assessmentRunArns
 * @property Shapes\FindingFilter $filter
 * @property string $nextToken
 * @property int $maxResults
 */
class ListFindingsRequest extends Request
{
    /**
     * @param array{
     *     assessmentRunArns?: list<string>,
     *     filter?: Shapes\FindingFilter,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
