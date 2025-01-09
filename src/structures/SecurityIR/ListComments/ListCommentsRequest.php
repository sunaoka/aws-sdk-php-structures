<?php

namespace Sunaoka\Aws\Structures\SecurityIR\ListComments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 25> $maxResults
 * @property string $caseId
 */
class ListCommentsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 25>,
     *     caseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
