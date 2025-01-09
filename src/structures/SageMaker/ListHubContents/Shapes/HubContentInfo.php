<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHubContents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $HubContentName
 * @property string $HubContentArn
 * @property string $SageMakerPublicHubContentArn
 * @property string $HubContentVersion
 * @property 'Model'|'Notebook'|'ModelReference' $HubContentType
 * @property string $DocumentSchemaVersion
 * @property string $HubContentDisplayName
 * @property string $HubContentDescription
 * @property 'Supported'|'Deprecated' $SupportStatus
 * @property list<string> $HubContentSearchKeywords
 * @property 'Available'|'Importing'|'Deleting'|'ImportFailed'|'DeleteFailed' $HubContentStatus
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $OriginalCreationTime
 */
class HubContentInfo extends Shape
{
    /**
     * @param array{
     *     HubContentName: string,
     *     HubContentArn: string,
     *     SageMakerPublicHubContentArn?: string,
     *     HubContentVersion: string,
     *     HubContentType: 'Model'|'Notebook'|'ModelReference',
     *     DocumentSchemaVersion: string,
     *     HubContentDisplayName?: string,
     *     HubContentDescription?: string,
     *     SupportStatus?: 'Supported'|'Deprecated',
     *     HubContentSearchKeywords?: list<string>,
     *     HubContentStatus: 'Available'|'Importing'|'Deleting'|'ImportFailed'|'DeleteFailed',
     *     CreationTime: \Aws\Api\DateTimeResult,
     *     OriginalCreationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
