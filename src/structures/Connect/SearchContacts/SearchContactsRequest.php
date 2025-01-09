<?php

namespace Sunaoka\Aws\Structures\Connect\SearchContacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property Shapes\SearchContactsTimeRange $TimeRange
 * @property Shapes\SearchCriteria $SearchCriteria
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property Shapes\Sort $Sort
 */
class SearchContactsRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     TimeRange: Shapes\SearchContactsTimeRange,
     *     SearchCriteria?: Shapes\SearchCriteria,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     Sort?: Shapes\Sort
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
