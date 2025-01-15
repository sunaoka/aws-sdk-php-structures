<?php

namespace Sunaoka\Aws\Structures\MTurk\ListReviewPolicyResultsForHIT;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HITId
 * @property list<'Assignment'|'HIT'>|null $PolicyLevels
 * @property bool|null $RetrieveActions
 * @property bool|null $RetrieveResults
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListReviewPolicyResultsForHITRequest extends Request
{
    /**
     * @param array{
     *     HITId: string,
     *     PolicyLevels?: list<'Assignment'|'HIT'>|null,
     *     RetrieveActions?: bool|null,
     *     RetrieveResults?: bool|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
