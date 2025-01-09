<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAssociations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceArn
 * @property string $DestinationArn
 * @property string $SourceType
 * @property string $DestinationType
 * @property 'ContributedTo'|'AssociatedWith'|'DerivedFrom'|'Produced'|'SameAs' $AssociationType
 * @property \Aws\Api\DateTimeResult $CreatedAfter
 * @property \Aws\Api\DateTimeResult $CreatedBefore
 * @property 'SourceArn'|'DestinationArn'|'SourceType'|'DestinationType'|'CreationTime' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int<1, 100> $MaxResults
 */
class ListAssociationsRequest extends Request
{
    /**
     * @param array{
     *     SourceArn?: string,
     *     DestinationArn?: string,
     *     SourceType?: string,
     *     DestinationType?: string,
     *     AssociationType?: 'ContributedTo'|'AssociatedWith'|'DerivedFrom'|'Produced'|'SameAs',
     *     CreatedAfter?: \Aws\Api\DateTimeResult,
     *     CreatedBefore?: \Aws\Api\DateTimeResult,
     *     SortBy?: 'SourceArn'|'DestinationArn'|'SourceType'|'DestinationType'|'CreationTime',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NextToken?: string,
     *     MaxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
