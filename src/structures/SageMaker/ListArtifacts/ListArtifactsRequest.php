<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListArtifacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceUri
 * @property string $ArtifactType
 * @property \Aws\Api\DateTimeResult $CreatedAfter
 * @property \Aws\Api\DateTimeResult $CreatedBefore
 * @property 'CreationTime' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListArtifactsRequest extends Request
{
    /**
     * @param array{
     *     SourceUri?: string,
     *     ArtifactType?: string,
     *     CreatedAfter?: \Aws\Api\DateTimeResult,
     *     CreatedBefore?: \Aws\Api\DateTimeResult,
     *     SortBy?: 'CreationTime',
     *     SortOrder?: 'Ascending'|'Descending',
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
