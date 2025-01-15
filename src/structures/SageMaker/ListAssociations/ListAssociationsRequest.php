<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SourceArn
 * @property string|null $DestinationArn
 * @property string|null $SourceType
 * @property string|null $DestinationType
 * @property 'ContributedTo'|'AssociatedWith'|'DerivedFrom'|'Produced'|'SameAs'|null $AssociationType
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property 'SourceArn'|'DestinationArn'|'SourceType'|'DestinationType'|'CreationTime'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListAssociationsRequest extends Request
{
    /**
     * @param array{
     *     SourceArn?: string|null,
     *     DestinationArn?: string|null,
     *     SourceType?: string|null,
     *     DestinationType?: string|null,
     *     AssociationType?: 'ContributedTo'|'AssociatedWith'|'DerivedFrom'|'Produced'|'SameAs'|null,
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     SortBy?: 'SourceArn'|'DestinationArn'|'SourceType'|'DestinationType'|'CreationTime'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
