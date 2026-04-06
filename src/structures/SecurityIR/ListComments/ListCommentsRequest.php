<?php

namespace Sunaoka\Aws\Structures\SecurityIR\ListComments;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<1, 25>|null $maxResults
 * @property string $caseId
 */
class ListCommentsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<1, 25>|null,
     *     caseId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
