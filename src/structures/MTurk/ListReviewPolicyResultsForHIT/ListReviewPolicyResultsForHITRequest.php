<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewPolicyResultsForHIT;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITId
 * @property list<'Assignment'|'HIT'> $PolicyLevels
 * @property bool $RetrieveActions
 * @property bool $RetrieveResults
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
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
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
