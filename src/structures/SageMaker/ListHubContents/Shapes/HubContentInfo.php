<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHubContents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HubContentName
 * @property string $HubContentArn
 * @property string|null $SageMakerPublicHubContentArn
 * @property string $HubContentVersion
 * @property 'Model'|'Notebook'|'ModelReference'|'DataSet'|'JsonDoc' $HubContentType
 * @property string $DocumentSchemaVersion
 * @property string|null $HubContentDisplayName
 * @property string|null $HubContentDescription
 * @property 'Supported'|'Deprecated'|'Restricted'|null $SupportStatus
 * @property list<string>|null $HubContentSearchKeywords
 * @property 'Available'|'Importing'|'Deleting'|'ImportFailed'|'DeleteFailed'|'PendingImport'|'PendingDelete' $HubContentStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $OriginalCreationTime
 */
class HubContentInfo extends Shape
{
    /**
     * @param array{
     *     HubContentName: string,
     *     HubContentArn: string,
     *     SageMakerPublicHubContentArn?: string|null,
     *     HubContentVersion: string,
     *     HubContentType: 'Model'|'Notebook'|'ModelReference'|'DataSet'|'JsonDoc',
     *     DocumentSchemaVersion: string,
     *     HubContentDisplayName?: string|null,
     *     HubContentDescription?: string|null,
     *     SupportStatus?: 'Supported'|'Deprecated'|'Restricted'|null,
     *     HubContentSearchKeywords?: list<string>|null,
     *     HubContentStatus: 'Available'|'Importing'|'Deleting'|'ImportFailed'|'DeleteFailed'|'PendingImport'|'PendingDelete',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     OriginalCreationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
