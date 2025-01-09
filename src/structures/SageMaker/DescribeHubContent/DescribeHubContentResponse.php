<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeHubContent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $HubContentName
 * @property string $HubContentArn
 * @property string $HubContentVersion
 * @property 'Model'|'Notebook'|'ModelReference' $HubContentType
 * @property string $DocumentSchemaVersion
 * @property string $HubName
 * @property string $HubArn
 * @property string $HubContentDisplayName
 * @property string $HubContentDescription
 * @property string $HubContentMarkdown
 * @property string $HubContentDocument
 * @property string $SageMakerPublicHubContentArn
 * @property string $ReferenceMinVersion
 * @property 'Supported'|'Deprecated' $SupportStatus
 * @property list<string> $HubContentSearchKeywords
 * @property list<Shapes\HubContentDependency> $HubContentDependencies
 * @property 'Available'|'Importing'|'Deleting'|'ImportFailed'|'DeleteFailed' $HubContentStatus
 * @property string $FailureReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class DescribeHubContentResponse extends Response
{
}
