<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\SearchContactsTimeRange $TimeRange
 * @property Shapes\SearchCriteria|null $SearchCriteria
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property Shapes\Sort|null $Sort
 */
class SearchContactsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     TimeRange: Shapes\SearchContactsTimeRange,
     *     SearchCriteria?: Shapes\SearchCriteria|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Sort?: Shapes\Sort|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
