<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewPolicyResultsForHIT;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITId
 * @property list<'Assignment'|'HIT'> $PolicyLevels
 * @property bool $RetrieveActions
 * @property bool $RetrieveResults
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListReviewPolicyResultsForHITRequest extends Request
{
    /**
     * @param array{
     *     HITId: string,
     *     PolicyLevels?: list<'Assignment'|'HIT'>,
     *     RetrieveActions?: bool,
     *     RetrieveResults?: bool,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
