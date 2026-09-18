<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HubContentName
 * @property string $HubContentArn
 * @property string $HubContentVersion
 * @property 'Model'|'Notebook'|'ModelReference'|'DataSet'|'JsonDoc' $HubContentType
 * @property string $DocumentSchemaVersion
 * @property string $HubName
 * @property string $HubArn
 * @property string|null $HubContentDisplayName
 * @property string|null $HubContentDescription
 * @property string|null $HubContentMarkdown
 * @property string|null $HubContentDocument
 * @property string|null $SageMakerPublicHubContentArn
 * @property string|null $ReferenceMinVersion
 * @property 'Supported'|'Deprecated'|'Restricted'|null $SupportStatus
 * @property list<string>|null $HubContentSearchKeywords
 * @property list<HubContentDependency>|null $HubContentDependencies
 * @property 'Available'|'Importing'|'Deleting'|'ImportFailed'|'DeleteFailed'|'PendingImport'|'PendingDelete' $HubContentStatus
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property list<Tag>|null $Tags
 */
class HubContent extends Shape
{
    /**
     * @param array{
     *     HubContentName: string,
     *     HubContentArn: string,
     *     HubContentVersion: string,
     *     HubContentType: 'Model'|'Notebook'|'ModelReference'|'DataSet'|'JsonDoc',
     *     DocumentSchemaVersion: string,
     *     HubName: string,
     *     HubArn: string,
     *     HubContentDisplayName?: string|null,
     *     HubContentDescription?: string|null,
     *     HubContentMarkdown?: string|null,
     *     HubContentDocument?: string|null,
     *     SageMakerPublicHubContentArn?: string|null,
     *     ReferenceMinVersion?: string|null,
     *     SupportStatus?: 'Supported'|'Deprecated'|'Restricted'|null,
     *     HubContentSearchKeywords?: list<string>|null,
     *     HubContentDependencies?: list<HubContentDependency>|null,
     *     HubContentStatus: 'Available'|'Importing'|'Deleting'|'ImportFailed'|'DeleteFailed'|'PendingImport'|'PendingDelete',
     *     FailureReason?: string|null,
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
