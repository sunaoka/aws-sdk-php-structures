<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHubContentVersions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $HubName
 * @property 'Model'|'Notebook'|'ModelReference'|'DataSet'|'JsonDoc' $HubContentType
 * @property string $HubContentName
 * @property string|null $MinVersion
 * @property string|null $MaxSchemaVersion
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property 'HubContentName'|'CreationTime'|'HubContentStatus'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListHubContentVersionsRequest extends Request
{
    /**
     * @param array{
     *     HubName: string,
     *     HubContentType: 'Model'|'Notebook'|'ModelReference'|'DataSet'|'JsonDoc',
     *     HubContentName: string,
     *     MinVersion?: string|null,
     *     MaxSchemaVersion?: string|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     SortBy?: 'HubContentName'|'CreationTime'|'HubContentStatus'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
