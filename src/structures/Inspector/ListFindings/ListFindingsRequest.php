<?php

namespace Sunaoka\Aws\Structures\Inspector\ListFindings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $assessmentRunArns
 * @property Shapes\FindingFilter|null $filter
 * @property string|null $nextToken
 * @property int|null $maxResults
 */
class ListFindingsRequest extends Request
{
    /**
     * @param array{
     *     assessmentRunArns?: list<string>|null,
     *     filter?: Shapes\FindingFilter|null,
     *     nextToken?: string|null,
     *     maxResults?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
