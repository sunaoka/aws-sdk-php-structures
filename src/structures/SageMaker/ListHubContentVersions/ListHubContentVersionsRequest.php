<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHubContentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 * @property 'Model'|'Notebook'|'ModelReference' $HubContentType
 * @property string $HubContentName
 * @property string $MinVersion
 * @property string $MaxSchemaVersion
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property 'HubContentName'|'CreationTime'|'HubContentStatus' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListHubContentVersionsRequest extends Request
{
    /**
     * @param array{
     *     HubName: string,
     *     HubContentType: 'Model'|'Notebook'|'ModelReference',
     *     HubContentName: string,
     *     MinVersion?: string,
     *     MaxSchemaVersion?: string,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     SortBy?: 'HubContentName'|'CreationTime'|'HubContentStatus',
     *     SortOrder?: 'Ascending'|'Descending',
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
