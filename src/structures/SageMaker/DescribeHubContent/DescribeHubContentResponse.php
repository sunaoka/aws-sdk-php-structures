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
 * @property string|null $HubContentDisplayName
 * @property string|null $HubContentDescription
 * @property string|null $HubContentMarkdown
 * @property string $HubContentDocument
 * @property string|null $SageMakerPublicHubContentArn
 * @property string|null $ReferenceMinVersion
 * @property 'Supported'|'Deprecated'|null $SupportStatus
 * @property list<string>|null $HubContentSearchKeywords
 * @property list<Shapes\HubContentDependency>|null $HubContentDependencies
 * @property 'Available'|'Importing'|'Deleting'|'ImportFailed'|'DeleteFailed' $HubContentStatus
 * @property string|null $FailureReason
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class DescribeHubContentResponse extends Response
{
}
