<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListArtifacts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $SourceUri
 * @property string|null $ArtifactType
 * @property \Aws\Api\DateTimeResult|null $CreatedAfter
 * @property \Aws\Api\DateTimeResult|null $CreatedBefore
 * @property 'CreationTime'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListArtifactsRequest extends Request
{
    /**
     * @param array{
     *     SourceUri?: string|null,
     *     ArtifactType?: string|null,
     *     CreatedAfter?: \Aws\Api\DateTimeResult|null,
     *     CreatedBefore?: \Aws\Api\DateTimeResult|null,
     *     SortBy?: 'CreationTime'|null,
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
